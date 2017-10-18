<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=ellipsis archi;charset=utf8', 'root', '');
		if ($condition!='*') {
			$response = $bdd->query("SELECT * FROM " . $tab . " WHERE ".$condition);
			$data = $response->fetch();
		}
		else{
			$response = $bdd->query("SELECT * FROM " . $tab);
		}

	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
?>