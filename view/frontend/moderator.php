<?php $title = "Partie administration";?>
<?php session_start(); ?>
<?php ob_start();?>

<div id="modo">

	<a href="index.php?action=addPlayer">Ajouter Joueur</a>
	<a href="index.php?action=addTeam">Ajouter Équipe</a>

</div>

<?php $content = ob_get_clean();?>
<?php require('template.php');?>