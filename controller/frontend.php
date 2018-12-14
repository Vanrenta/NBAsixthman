<?php 

require_once('model/PlayerManager.php');
require_once('model/TeamManager.php');
require_once('model/MembersManager.php');


function toIndex(){
	require("view/frontend/receptionView.php");
}

function toRegIn(){
	require("view/frontend/logInView.php");
}

function regIn($pseudo, $pass, $checked_pass, $mail, $team){

	$verif_pass = false;
	$memberManager = new MembersManager();

	if(preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}[a-z]{2,4}$#', $mail)){

		$verif_mail = $memberManager->verifyMail($mail);
		if($verif_mail->fetch() != false){
			echo '<p class="erreur">Cette adresse mail est déjà utilisée</p>';
			return;
		}

		$verif_pseudo = $memberManager->verifyPseudo($pseudo);
		if($verif_pseudo->fetch() != false){
			echo '<p class="erreur">Ce pseudo est déjà utilisé</p>';
			return;
		}


		if($pass === $checked_pass){

			$verif_pass = true;
			
			$pass_hache = password_hash($pass, PASSWORD_DEFAULT);

			$affectedLines = $memberManager->addMember($pseudo, $pass_hache, $mail, $team);

			if($affectedLines === false){
				throw new Exception("Impossible d'ajouter le membre");
			}else{
				header('Location: index.php?action=sess');
			}
		}else{
			header('refresh:2, url=index.php?action=toRegIn');
			echo '<p>Les mots de passe ne sont pas identiques</p>';
		}
	}else{
		if(!$verif_pass){
			header('refresh:2, url=index.php?action=toRegIn');
			echo '<p>Les mots de passe ne sont pas identiques</p>';
		}
		echo '<p>L\'adresse mail n\'est pas valide</p>';
	}
}

function logIn($pass, $mail){
	$memberManager = new MembersManager();

	$verif = $memberManager->logIn($mail);

	$data = $verif->fetch();

	if(password_verify($pass, $data['pass'])){
		session_start();
		$_SESSION['id'] = $data['id'];
		$_SESSION['pseudo'] = $data['pseudo'];
		$_SESSION['mail'] = $data['mail'];
		$_SESSION['team'] = $data['favorite_team'];
		$_SESSION['modo'] = $data['modo'];
		header('Location: index.php?action=index');
	}else{
		header("refresh:2,url=index.php?action=toRegIn");
		echo '<p>L\'adresse mail ou le mot de passe est incorrect</p>';
	}

}


function toSess(){
	require("view/frontend/toSess.php");
}

function logOut(){
	require("view/frontend/toLogOut.php");
}

function toProfile(){
	$memberManager = new MembersManager();
	session_start();
	$id = $_SESSION['id'];
	$team = $memberManager->team($id);
	$data = $team->fetch();
	$_SESSION['team'] = $data['favorite_team'];

	$modo = $memberManager->modo($id);
	$data = $modo->fetch();
	$_SESSION['modo'] = $data['modo'];

	$pseudo = $memberManager->pseudo($id);
	$data = $pseudo->fetch();
	$_SESSION['pseudo'] = $data['pseudo'];
	require("view/frontend/toProfile.php");
}

function toUpdateProfile(){
	require("view/frontend/updateProfile.php");
}

function updateProfile($pseudo, $mail, $team){
	$memberManager = new MembersManager();

	session_start();

	$id = $_SESSION['id'];

	$up = $memberManager->upMember($id, $pseudo, $mail, $team);

	header("Location: index.php?action=profile");
}

function toUpdatePassword(){
	require("view/frontend/updatePassword.php");
}

function updatePassword($old_pass, $new_pass, $checked_pass){
	$memberManager = new MembersManager();

	session_start();

	$id = $_SESSION['id'];

	$data = $memberManager->getPass($id);
	$pass = $data->fetch();

	if(password_verify($old_pass, $pass['pass'])){
		if($new_pass === $checked_pass){
			$pass_hache = password_hash($new_pass, PASSWORD_DEFAULT);
			$up = $memberManager->upPass($id, $pass_hache);
			header("refresh:2, url=index.php?action=profile");
			ob_start();
			echo 'Votre mot de passe a été modifié avec succès';
			$content = ob_get_clean();
			require('view/frontend/template.php');
		}else{
			header("refresh:2,url=index.php?action=toUpdatePassword");
			ob_start();
			echo '<p>Les mots de passe ne sont pas identiques.</p><p>Rechargement de la page....</p>';
			$content = ob_get_clean();
			require('view/frontend/template.php');
		}
	}else{
		header("refresh:2,url=index.php?action=toUpdatePassword");
		ob_start();
		echo '<p>L\'ancien mot de passe ne correspond pas à votre mot de passe.</p><p>Rechargement de la page....</p>';
		$content = ob_get_clean();
		require('view/frontend/template.php');
	}

}


function toModerate(){
	require('view/frontend/moderator.php');
}

function toAddPlayer(){
	require('view/frontend/addPlayer.php');
}

function toAddTeam(){
	require('view/frontend/addTeam.php');
}

function addPlayer($name, $firstname, $birthday, $team){
	$playerManager = new PlayerManager();

	$affectedLines = $playerManager->addPlayer($name, $firstname, $birthday, $team);

	if($affectedLines === false){
		throw new Exception("Impossible d'ajouter le joueur");
	}else{
		header('Location: index.php?action=addPlayer');
	}

}

function addTeam($franchise, $city, $creationDate){
	$teamManager = new TeamManager();

	$affectedLines = $teamManager->addTeam($franchise, $city, $creationDate);

	if($affectedLines === false){
		throw new Exception("Impossible d'ajouter l'équipe'");
	}else{
		header('refresh:1, url=index.php?action=addTeam');
		echo 'L\'équipe a bien été ajoutée';
	}

}

function searchPlayer($string){
	$playerManager = new PlayerManager();

	$player = $playerManager->searchPlayer($string);

	$id = $player->fetch();

	if(isset($id['id'])){

		header('Location: index.php?action=playerView&id=' . $id['id']);
	}else{
		header('Location: index.php?action=playerView&string=' . $string);
	}
}

function playerView($id){
	$playerManager = new PlayerManager();

	$player = $playerManager->getPlayer($id);

	$data = $player->fetch();

	$team = preg_split('/(?=[A-Z])/', $data['team'], -1, PREG_SPLIT_NO_EMPTY);

	require('view/frontend/playerView.php');
}

function addPicture($id){
	if(isset($_FILES['playerPic']) AND $_FILES['playerPic']['error'] == 0){
		if($_FILES['playerPic']['size'] <= 1000000){
			$fileInfo = pathinfo($_FILES['playerPic']['name']);
			$extensionUpload = $fileInfo['extension'];
			$authorizedExtensions = array('jpg', 'jpeg', 'png', 'gif');
			if(in_array($extensionUpload, $authorizedExtensions)){
				move_uploaded_file($_FILES['playerPic']['tmp_name'], 'public/refs/' . $id . "." . $extensionUpload);
				header('refresh:1, url=index.php?action=playerView&id=' . $id);
				echo 'L\'envoi a bien été effectué';
			}
		}
	}else if(isset($_FILES['teamPic']) AND $_FILES['teamPic']['error'] == 0){
		if($_FILES['teamPic']['size'] <= 1000000){
			$fileInfo = pathinfo($_FILES['teamPic']['name']);
			$extensionUpload = $fileInfo['extension'];
			$authorizedExtensions = array('jpg', 'jpeg', 'png', 'gif');
			if(in_array($extensionUpload, $authorizedExtensions)){
				move_uploaded_file($_FILES['teamPic']['tmp_name'], 'public/refs/' . $id . $id . '.' . $extensionUpload);
				header('refresh:1, url=index.php?action=presentTeam&idTeam=' . $id);
				echo 'L\'envoi a bien été effectué';
			}
		}
	}
}

function presentTeams(){
	$teamManager = new teamManager();

	$teams = $teamManager->getTeams();

	$data = $teams->fetchAll();

	require("view/frontend/teamsView.php");
}

function presentTeam($id){
	$teamManager = new teamManager();

	$team = $teamManager->getTeam($id);

	$data = $team->fetch();

	require("view/frontend/teamView.php");
}