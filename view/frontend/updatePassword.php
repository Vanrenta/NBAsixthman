<?php $title = "Connexion/Inscription" ?>
<?php session_start(); ?>
<?php ob_start();?>

<form method="post" action="index.php?action=updatePassword" id="upPass">
	<table>

		<tr>
			<br/><td><label for="old_pass">Ancien mot de passe : </label><input type="password" name="old_pass" id="old_pass"><br/><br/></td>
		</tr>
		<tr>
			<td><label for="new_pass">Nouveau mot de passe : </label><input type="password" name="new_pass" id="new_pass"><br/><br/></td>
		</tr>
		<tr>
			<td><label for="checked_pass">Confirmer le nouveau mot de passe : </label><input type="password" name="checked_pass" id="checked_pass"><br/><br/></td>
		</tr>

		<tr>
			<td>
				<input type="submit"><br/><br/>
			</td>
		</tr>

	</table>
</form>

<?php $content = ob_get_clean();?>
<?php require('template.php');?>