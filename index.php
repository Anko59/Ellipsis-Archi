<!DOCTYPE html>
<html>
<head>
	<?php include("include/header.php"); ?>
</head>
<body class="defaultBody">
	<?php
		$titre = 'Ellispsis Architecture';
		$subTitle = "Cabinet d'architectes à villeneuve d'Ascq";
		include('include/titre.php');
		$path =  'assets/img/index';
		$menuPath = 'assets/img/menu/index';
		$menuUrl = 'categories.php?cat=';
		$condition = 'is_main_index=1 ORDER BY RAND()';
		include('include/squaredImages.php'); 
	?>
	<script language="javascript" type="text/javascript" src="http://localhost/EllipsisArchi/assets/js/main.js"></script>
</body>
