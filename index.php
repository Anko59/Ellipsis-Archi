<!DOCTYPE html>
<html>
    <head>
<meta charset="utf-8" />
        
<title>Ellipsis, Architectes à Villeneuve d'Ascq</title>

<meta name="Description" content="Agence d’architecture située à Villeneuve d’Ascq, nous réalisons tout type de construction ou de rénovation. Habitat, bureaux, commerces, bâtiments industriels ou tertiaires, nous vous accompagnons dans la conception et la réalisation de votre projet, depuis les premières esquisses, jusqu’à la réception de chantier. ">

<meta name="Keywords" content="architecte, 59, architectes, architecture, leclercq, ellipsis, leclercq-ellipsis, villeneuve d'ascq, nord, lille, céline leurent, sébastien segers, construction, rénovation, chantier "/>

<meta name="Content-Language" content="fr">
<meta name="Copyright" content="Copyright ©2015 - Tout droits réservés. All right reserved">
<meta name="Author" content="DoomWeb">
<meta name="Identifier-Url" content="http://www.ellipsis.archi">
<meta name="Reply-To" content="celine.leurent@ellipsis.archi">
<meta name="Revisit-After" content="5 days">
<meta name="Robots" content="index, follow">
<meta name="Rating" content="general">
<meta name="Distribution" content="global">
<meta name="Geography" content="59">
<meta name="Category" content="internet">

<link rel="stylesheet" href="assets/css/style.css" />
<link rel="shortcut icon" href="images/favicon2.ico" type="image/x-icon">
<link rel="icon" href="images/favicon2.ico" type="image/x-icon">

<script language="javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
</head>
</head>
<body class="defaultBody">
	<div class = "imageContainer">
		<?php
			/*
			La liste de photos à afficher est définie en php
			la façon dont les photos sont agencées est définie en Javascript (pas moyen d'accéder au format de l'écran en php car coté serveur)
			*/
			$directoryName = 'assets/img/index'; // Nom du directory ou se trouvent les photos à afficher sur la page
			$imageList = array (); 
			$dir = new DirectoryIterator(dirname($directoryName)); // itération à travers le directory
			$max = 20;
			$i = 0;
			foreach ($dir as $fileinfo) {
			    if (!$fileinfo->isDot() && $i < $max) {
			        array_push($imageList, $fileinfo->getFilename());//Ajoute chaque image
			        $i += 1;
			    }
			}
			$id = 1;
			foreach ($imageList as $image) {  //Itération à travers les images
				echo '<img src = '.$directoryName . $image . 'class = squaredImage id = image' . $id . '>'; //Génération du html pour chaque image
				$id += 1;
			}
		?>
	</div>
</body>