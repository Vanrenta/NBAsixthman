<?php $title = "Ajouter une équipe"; ?>
<?php session_start();?>
<?php ob_start();?>

<div class="form">

<form method="post" action="index.php?action=addATeam" enctype="multipart/form-data" class="moderatoring">
	<table>
		<tr>
			<td class="td"><label for="city"><p>Ville : </p></label></td>
			<td><input type="text" name="city" id="city" required/></td>
		</tr>
		<tr>
			<td class="td"><label for="franchise"><p>Franchise : </p></label></td>
			<td><input type="text" name="franchise" id="franchise" required/></td>
		</tr>
		<tr>
			<td class="td"><label for="creationDate"><p>Date de création : </p></label></td>
			<td><input type="date" name="creationDate" id="creationDate" size=12 pattern="[0-9]{4}" required/>(aaaa)</td>
		</tr>
		<tr>
			<td><input type='submit'/></td>
		</tr>
	</table>
</form>
</div>

<?php $content = ob_get_clean();?>
<?php require('template.php');?>