<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?= $title ?></title>
	<link href="public/css/style.css" rel="stylesheet" /> 
</head>

<?php include("header.php"); ?>

<div class="corps">

<?php include("navig.php"); ?>

	<body>
		<?= $content ?>
		<script src="public/js/script.js"></script>
	</body>

</div>

<?php include("footer.php"); ?>

</html>