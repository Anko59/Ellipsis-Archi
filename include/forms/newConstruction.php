<?php
	if (isset($_POST) && isset($_POST['description']) && isset($_POST['nom'])){
		$tab = 'catégories';
		$condition = "textMenu='".$_POST['category']."'";
		include('../dbConnection.php');
		$catPath = $data['Path'];
		$batPath = $catPath.'/'.$_POST['nom'].'/';
		echo $batPath;
		if(!file_exists('../../'.$batPath)){
			mkdir('../../'.$batPath);
		}
		$tab = 'construction';
		$condition = 'nom='."'".$_POST['nom']."'";
		include('../dbConnection.php');
		if(count($data)>1){
			echo 'Ce bâtiment existe déjà';
		}
		else {
			$reqString = "INSERT INTO construction(nom,description,Path,categorie) VALUES(:nom, :description,:path,:categorie)";
			$execArray = array(
				'nom' => $_POST['nom'],
				'description' => $_POST['description'],
				'path' => $batPath,
				'categorie' => $_POST['category']
			);
			include('../dbInsert.php');
			echo "Success";
		}
	}
?>