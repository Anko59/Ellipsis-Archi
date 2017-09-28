<html>
<head>
	<?php include("include/header.php"); ?>
</head>
<body class="defaultBody">
	<?php
		$cat = $_GET['cat'];
		$tab = 'catégories';
		$condition = 'textMenu='."'".$cat."'";
		include ('include/dbConnection.php');
		$titre = $data['Nom'];
		$subTitle = $data['Description'];
		include ('include/titre.php');
		$path = $data['Path'].'/index';
		$menuPath = 'assets/img/menu/retour';
		$menuUrl = 'index.php?ret=';
		include ('include/squaredImages.php');
	?>
	<script language="javascript" type="text/javascript" src="http://localhost/EllipsisArchi/assets/js/main.js"></script>
</body>