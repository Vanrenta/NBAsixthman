<?php $title = "Liste des équipes" ?>
<?php session_start();?>
<?php ob_start();?>

<div id="teams">
	<?php
	foreach ($data as $key => $value) {
		?>
			<figure>
			<img src=<?php echo "public/refs/" . $value['id'] . $value['id'] . '.png'?>>
			<figcaption><?php print_r('<a href=index.php?action=presentTeam&idTeam=' . $value['id'] . '>' . $value['city'] . ' ' . $value['franchise'] . '</a><br/>');?>
			</figcaption>
		</figure>
		<?php
	}
	?>

</div>

<?php $content = ob_get_clean();?>
<?php require('template.php');?>