<?php $title = "Connexion/Inscription" ?>
<?php session_start(); ?>
<?php ob_start();?>

<form method="post" action="index.php?action=updateProfile" id="upPro">
	<table>

		<tr>
			<td><label for="pseudo">Pseudo : </label><input type="texte" name="pseudo" id="pseudo" value=<?php echo $_SESSION['pseudo']?>></td>
		</tr>
		<tr>
			<td><label for="mail">mail : </label><input type="texte" name="mail" id="mail" value=<?php echo $_SESSION['mail']?>></td>
		</tr>
		<!--<tr>
			<td><label for="team">Équipe préférée : </label><input type="texte" name="team" id="team" value=<?php echo $_SESSION['team']?>></td>
		</tr>-->
		<tr>
			<td><label for="team">Équipe préférée : </label><select name="team" id="team" required>
				<option value=<?php echo $_SESSION['team']?>><?php echo $_SESSION['team']?></option>
				<option value="AtlantaHawks">Atlanta Hawks</option><option value="BostonCeltics">Boston Celtics</option><option value="BrooklynNets">Brooklyn Nets</option><option value="CharlotteHornetss">Charlotte Hornets</option><option value="ChicagoBulls">Chicago Bulls</option><option value="ClevelandCavaliers">Cleveland Cavaliers</option><option value="DallasMavericks">Dallas Mavericks</option><option value="DenverNuggets">Denver Nuggets</option><option value="DetroitPistons">Detroit Pistons</option><option value="GoldenStateWarriors">Golden State Warriors</option><option value="HoustonRockets">Houston Rockets</option><option value="IndianaPacers">Indiana Pacers</option><option value="LosAngelesClippers">Los Angeles Clippers</option><option value="LosAngelesLakers">Los Angeles Lakers</option><option value="MemphisGrizzlies">Memphis Grizzlies</option><option value="MiamiHeat">Miami Heat</option><option value="MilwaukeeBucks">Milwaukee Bucks</option><option value="MinnesotaTimberwolves">Minnesota Timberwolves</option><option value="NewOrleansPelicans">New Orleans Pelicans</option><option value="NewYorkKnicks">New York Knicks</option><option value="OklahomaCityThunder">Oklahoma City Thunder</option><option value="OrlandoMagic">Orlando Magic</option><option value="Philadeplphia76ers">Philadeplphia 76ers</option><option value="PhoenixSuns">Phoenix Suns</option><option value="PortlandTrailBlazers">Portland Trail Blazers</option><option value="SacramentoKings">Sacramento Kings</option><option value="SanAntonioSpurs">San Antonio Spurs</option><option value="TorontoRaptors">Toronto Raptors</option><option value="UtahJazz">Utah Jazz</option><option value="WashingtonWizards">Washington Wizards</option>
			</select></td>
		</tr>

		<tr>
			<td>
				<input type="submit">
			</td>
		</tr>

	</table>
</form>

<?php $content = ob_get_clean();?>
<?php require('template.php');?>