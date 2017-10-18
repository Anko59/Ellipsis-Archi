<?php
    /* Ce Fichier est un mystère, des erreurs sont apparues et disparues sans que je ne change rien*/
    if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'];
    }
    else {
    	$tab = 'construction';
    	$condition = 'nom='."'".$_POST['batiment']."'";
    	include('../dbConnection.php');
    	$path = $data['Path'].$_FILES['file']['name'];
    	$buildingId = $data['id'];
    	$cat = $data['categorie'];
        move_uploaded_file($_FILES['file']['tmp_name'], '../../'.$path);
    	$reqString = 'INSERT INTO images(path,building_id,is_main_index,is_cat_index,categorie) VALUES(:path, :building_id,:is_main_index,:is_cat_index,:categorie)';
    	$execArray = array(
    		'path'=> $path,
    		'building_id' => $buildingId,
    		'is_main_index' => $_POST['isIndex'],
    		'is_cat_index' => $_POST['isCatIndex'],
    		'categorie' => $cat
    	);
    	include('../dbInsert.php');
    	echo 'Success';
    }

?>