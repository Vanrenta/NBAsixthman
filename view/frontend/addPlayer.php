<?php $title = "Ajouter un joueur"; ?>
<?php session_start();?>
<?php ob_start();?>

<div class="form">

<form method="post" action="index.php?action=addAPlayer" enctype="multipart/form-data" class="moderatoring">
	<table>
		<tr>
			<td class="td"><label for="name"><p>Nom : </p></label></td>
			<td><input type="text" name="name" id="name" required/></td>
		</tr>
		<tr>
			<td class="td"><label for="firstname"><p>Prénom : </p></label></td>
			<td><input type="text" name="firstname" id="firstname" required/></td>
		</tr>
		<tr>
			<td class="td"><label for="birthday"><p>Date de naissance : </p></label></td>
			<td><input type="date" name="birthday" id="birthday" size=12 pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" required/>(aaaa-mm-jj)</td>
		</tr>
		<tr>
			<td class="td"><p>Équipe : </p></td>
			<td><select name="team" id="team" required>
				<option></option>
				<option value="AtlantaHawks">Atlanta Hawks</option><option value="BostonCeltics">Boston Celtics</option><option value="BrooklynNets">Brooklyn Nets</option><option value="CharlotteHornetss">Charlotte Hornets</option><option value="ChicagoBulls">Chicago Bulls</option><option value="ClevelandCavaliers">Cleveland Cavaliers</option><option value="DallasMavericks">Dallas Mavericks</option><option value="DenverNuggets">Denver Nuggets</option><option value="DetroitPistons">Detroit Pistons</option><option value="GoldenStateWarriors">Golden State Warriors</option><option value="Houston Rockets">Houston Rockets</option><option value="Indiana Pacers">Indiana Pacers</option><option value="LosAngelesClippers">Los Angeles Clippers</option><option value="LosAngelesLakers">Los Angeles Lakers</option><option value="MemphisGrizzlies">Memphis Grizzlies</option><option value="MiamiHeat">Miami Heat</option><option value="MilwaukeeBucks">Milwaukee Bucks</option><option value="MinnesotaTimberwolves">Minnesota Timberwolves</option><option value="NewOrleansPelicans">New Orleans Pelicans</option><option value="NewYorkKnicks">New York Knicks</option><option value="OklahomaCityThunder">Oklahoma City Thunder</option><option value="OrlandoMagic">Orlando Magic</option><option value="Philadeplphia76ers">Philadeplphia 76ers</option><option value="PhoenixSuns">Phoenix Suns</option><option value="PortlandTrailBlazers">Portland Trail Blazers</option><option value="SacramentoKings">Sacramento Kings</option><option value="SanAntonioSpurs">San Antonio Spurs</option><option value="TorontoRaptors">Toronto Raptors</option><option value="UtahJazz">Utah Jazz</option><option value="WashingtonWizards">Washington Wizards</option>
			</select></td>
		</tr>
		<tr>
			<td><input type='submit'/></td>
		</tr>
	</table>
</form>
</div>

<?php $content = ob_get_clean();?>
<?php require('template.php');?>