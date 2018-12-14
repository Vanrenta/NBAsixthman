<?php $title = "Accueil" ?>
<?php session_start();?>
<?php ob_start();?>

<section>

	<article><h3>MVP RANKINGSMVP Ranking – Semaine 15 : Russell Westbrook et Stephen Curry sont hallucinants !</h3><p>C’est lundi, et c’est donc l’heure du MVP Ranking version TrashTalk. Lors de la quinzième semaine de la saison, Russell Westbrook et Stephen Curry ont tout détruit sur leur passage. Désormais, retrouvez ci-dessous les meilleures performances des sept derniers jours, ainsi que le classement hebdomadaire et général de cette course toujours très excitante.</p></article>
	<article><h3>Autre match</h3><p>Sur les huit victoires du Thunder, le duo All-Star est clairement monté en puissance. Et si l’adversité n’a pas toujours été au rendez-vous dans cette série de succès, OKC a pu compter sur plusieurs partitions de grande classe des deux hommes. Pour le meneur, les chiffres sont éloquents : 29 points, 9 rebonds, 10.3 passes décisives à presque 49% au tir. Quant à PG13, en plus de défendre le fer, l’ancien ailier d’Indiana a retrouvé la mire après un début d’exercice compliqué, avec plus de 23 points de moyenne.
	Le troisième larron de la bande, Carmelo Anthony, certes moins en réussite que ses deux compères, fait le job pour assurer au final plus de 65% des points de l’équipe ! Et que dire de Steven Adams, dernier membre du Big Four, dont la rugosité au rebond, l’adresse au shoot et l’âpreté dans les duels ont rendu le Néo-Zélandais indispensable à l’équilibre défensif mais aussi offensif de la franchise. Un quatuor de plus en plus efficace dont la mission sera de faire oublier Roberson sur cette seconde partie de saison, puis en Playoffs. Ce moment où le Thunder tentera de faire peur, une fois de plus.</p></article>

</section>

<aside>

	<h3>Randomer NBA</h3> <p>Chaque jour, un joueur est choisi aléatoirement et vous est présenté ! </p>
	<p> Aujourd'hui : <a href="">Rajon Rondo </a></p>

</aside>

<?php $content = ob_get_clean();?>
<?php require('template.php');?>