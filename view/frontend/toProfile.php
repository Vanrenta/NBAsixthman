<?php 

//session_start();
if(isset($_SESSION['pseudo'])){
$title = "Profil de " . $_SESSION['pseudo'];
}
ob_start();
?>

<span id="upPro"><p><a href="index.php?action=toUpdateProfile">Changer mes informations</a></p><p><a href="index.php?action=toUpdatePassword">Changer mon mot de passe</a></p></span>

<?php $content = ob_get_clean();?>
<?php require('template.php');?>