<?php $title = "Connexion/Inscription" ?>
<?php ob_start();?>

<div id="reg">

	<h3>Nouveau membre ? Inscrivez-vous</h3>

	<form method="post" action="index.php?action=reg" onsubmit="return true">

		<label for="pseudo" >Pseudo : </label><input type="text" name="pseudo" id="pseudo" required/>
		<br/><br/>
		<label for="mail" >E-mail : </label><input type="text" name="mail" id="mail" required/><p id="mailValid"></p>
		<label for="pass">Mot de passe : </label><input type="password" name="pass" id="pass" required/>
		<br/><br/>
		<label for="checked_passwd">Validez le mot de passe : </label><input type="password" name="checked_passwd" id="checked_passwd" required/><p id="passValid"></p>
		<label for="team">Équipe préférée : </label>
		<select name="team" id="team" required>
			<option></option>
			<option value="AtlantaHawks">Atlanta Hawks</option><option value="BostonCeltics">Boston Celtics</option><option value="BrooklynNets">Brooklyn Nets</option><option value="CharlotteHornetss">Charlotte Hornets</option><option value="ChicagoBulls">Chicago Bulls</option><option value="ClevelandCavaliers">Cleveland Cavaliers</option><option value="DallasMavericks">Dallas Mavericks</option><option value="DenverNuggets">Denver Nuggets</option><option value="DetroitPistons">Detroit Pistons</option><option value="GoldenStateWarriors">Golden State Warriors</option><option value="Houston Rockets">Houston Rockets</option><option value="Indiana Pacers">Indiana Pacers</option><option value="LosAngelesClippers">Los Angeles Clippers</option><option value="LosAngelesLakers">Los Angeles Lakers</option><option value="MemphisGrizzlies">Memphis Grizzlies</option><option value="MiamiHeat">Miami Heat</option><option value="MilwaukeeBucks">Milwaukee Bucks</option><option value="MinnesotaTimberwolves">Minnesota Timberwolves</option><option value="NewOrleansPelicans">New Orleans Pelicans</option><option value="NewYorkKnicks">New York Knicks</option><option value="OklahomaCityThunder">Oklahoma City Thunder</option><option value="OrlandoMagic">Orlando Magic</option><option value="Philadeplphia76ers">Philadeplphia 76ers</option><option value="PhoenixSuns">Phoenix Suns</option><option value="PortlandTrailBlazers">Portland Trail Blazers</option><option value="SacramentoKings">Sacramento Kings</option><option value="SanAntonioSpurs">San Antonio Spurs</option><option value="TorontoRaptors">Toronto Raptors</option><option value="UtahJazz">Utah Jazz</option><option value="WashingtonWizards">Washington Wizards</option>
		</select>
		<br/><br/><input type="submit" value="Envoyer"/>

	</form>

	<script type="public/js/script.js"></script>

</div>

<div id="log">
	
	<h3>Connexion pour les membres inscrits</h3>

	<form method="post" action="index.php?action=log">
		<label for="email" >E-mail : </label><input type="text" name="email" id="email" required/>
		<br/><br/>
		<label for="epass">Mot de passe : </label><input type="password" name="epass" id="epass" required/>
		<br/><br/><input type="submit" value="S'enregistrer"/>
	</form>

</div>

<?php $content = ob_get_clean();?>
<?php require('template.php');?>