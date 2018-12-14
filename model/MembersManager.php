<?php

require_once("model/Manager.php");

class MembersManager extends Manager{
	public function addMember($pseudo, $pass, $mail, $team){
		$db = $this->dbConnect();

		$login = $db->prepare('INSERT INTO membres(pseudo, pass, mail, favorite_team, date_inscription, modo) VALUES (?, ?, ?, ?, CURDATE(), 0)');
		$affectedLines = $login->execute(array($pseudo, $pass, $mail, $team));

		return $affectedLines;
	}

	public function verifyMail($mail){
		$db = $this->dbConnect();

		$verif_mail = $db->prepare('SELECT pseudo FROM membres WHERE mail = :mail');
		$verif_mail->execute(array('mail'=>$mail));

		return $verif_mail;
	}

	public function verifyPseudo($pseudo){
		$db = $this->dbConnect();

		$verif_pseudo = $db->prepare('SELECT pseudo FROM membres WHERE pseudo = :pseudo');
		$verif_pseudo->execute(array('pseudo'=>$pseudo));

		return $verif_pseudo;
	}

	public function logIn($mail){
		$db = $this->dbConnect();

		$verif_id = $db->prepare('SELECT id, pseudo, pass, mail, favorite_team, modo FROM membres WHERE mail = :mail');
		$verif_id->execute(array('mail'=>$mail));

		return $verif_id;
	}

	public function upMember($id, $pseudo, $mail, $team){
		$db = $this->dbConnect();

		$upMember = $db->prepare('UPDATE membres SET pseudo = ?, mail = ?, favorite_team = ? WHERE id = ?');
		$upMember->execute(array($pseudo, $mail, $team, $id));

		return $upMember;
	}

	public function team($id){
		$db = $this->dbConnect();

		$team = $db->prepare('SELECT favorite_team FROM membres WHERE id=?');
		$team->execute(array($id));

		return $team;
	}

	public function pseudo($id){
		$db = $this->dbConnect();

		$pseudo = $db->prepare('SELECT pseudo FROM membres WHERE id=?');
		$pseudo->execute(array($id));

		return $pseudo;
	}

	public function modo($id){
		$db = $this->dbConnect();

		$modo = $db->prepare('SELECT modo FROM membres WHERE id=?');
		$modo->execute(array($id));

		return $modo;
	}

	public function getPass($id){
		$db = $this->dbConnect();

		$pass = $db->prepare('SELECT pass FROM membres WHERE id=?');
		$pass->execute(array($id));

		return $pass;
	}

	public function upPass($id, $pass){
		$db = $this->dbConnect();

		$affectedLines = $db->prepare('UPDATE membres SET pass = ? WHERE id=?');
		$affectedLines->execute(array($pass, $id));

	}
}