<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=ellipsis archi;charset=utf8', 'root', '');
	$response = $bdd->query("SELECT * FROM " . $tab . " WHERE ".$condition);
	$data = $response->fetch();
	$response->closeCursor();
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>