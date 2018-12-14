<?php $title = "Fiche de " . $data['firstname'] . " " . $data['lastname'] ?>
<?php session_start();?>
<?php ob_start();?>

<div id="player">

	<?php if(isset($data['lastname'])){ ?>

	<h1><?php echo $data['firstname'] . ' ' . $data['lastname'];?></h1>
	<h3><?php 
	$i = 0;
	while(isset($team[$i])){
		echo $team[$i] . " ";
		$i++;
	}
	?>

</h3>

<img src=<?php echo "public/refs/" . $data['id'] . '.png'?> alt=""/>

<br/>

<?php 
}else{
	echo "Aucun joueur ne correspond à votre requête : " . $_GET['string'];
}
if(isset($_SESSION['modo'])){
	if($_SESSION['modo'] == 1){
		?>

		<form method="post" action=<?php echo "index.php?action=addPicture&id=" . $data['id'] ?> enctype="multipart/form-data">
			<input type="file" name="playerPic">
			<input type="submit" value="Ajouter une photo"/>
		</form>
		<?php
	}
}

?>


</div>

<?php $content = ob_get_clean();?>
<?php require('template.php');?>