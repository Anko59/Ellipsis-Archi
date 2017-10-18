<?php
	$bdd = new PDO('mysql:host=localhost;dbname=ellipsis archi;charset=utf8', 'root', '');
	$req = $bdd->prepare($reqString);
	$req->execute($execArray);
?>