<?php $title = "Inscription" ?>
<?php ob_start()?>

<div id="over_reg">
	
	<p>L'inscription s'est terminée avec succès ! </p>

	<p>Vous pouvez vous connecter <a href="index.php?action=toRegIn">ici</a></p>

</div>

<?php $content = ob_get_clean();?>
<?php require('template.php');?>