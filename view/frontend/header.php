<header>
	
	<h1>NBAsixthman</h1> <p><img src="public/refs/mini_NBA_LOGO.png" alt="" /></p>


	<?php 

	if(isset($_SESSION['id'])){ 
		$tamp = "";
		$profile = '<p>Bonjour <a href="index.php?action=profile">'. $_SESSION['pseudo'] . '</a></p>';
		$logOut = '<p><a href=\'index.php?action=logOut\'>Déconnexion</a></p>';
		if(isset($_SESSION['modo'])){
			if($_SESSION['modo'] == 1){	
				$tamp = '<p><a href="index.php?action=moderator">Partie modération</a></p>';
			}
		}
		$profile = $profile . $tamp . $logOut;
		echo $profile;
	}else{ ?>
	<a href="index.php?action=toRegIn">Connexion/Inscription</a>
	<?php } ?>

</header>