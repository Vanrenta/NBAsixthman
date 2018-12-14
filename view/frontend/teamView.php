<?php $title = "Fiche de " . $data['city'] . ' ' . $data['franchise']?>
<?php session_start();?>
<?php ob_start();?>

<div id="team">

	<h1><?php echo $data['city'] . ' ' . $data['franchise'] ?></h1>

	<figure>
		<img src=<?php echo "public/refs/" . $data['id'] . $data['id'] . '.png'?> alt=<?php echo $data['franchise']?>>
		<figcaption><?php echo $data['city'] . ' ' . $data['franchise']?></figcaption>
	</figure>

<br/>

<h3>Franchise créée en <?php echo $data['date_creation'];?></h3>

<?php 
if(isset($_SESSION['modo'])){
	if($_SESSION['modo'] == 1){
		?>

		<form method="post" action=<?php echo "index.php?action=addPicture&idTeam=" . $data['id'] ?> enctype="multipart/form-data">
			<input type="file" name="teamPic">
			<input type="submit" value="Ajouter une photo"/>
		</form>
		<?php
	}
}

?>


</div>

<?php $content = ob_get_clean();?>
<?php require('template.php');?>