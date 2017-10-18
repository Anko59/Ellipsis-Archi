<?php
    session_start();
    if( isset($_POST['username']) && isset($_POST['password']) ){
    	$password = 'ArchItEctEs';
    	$login = 'ellipsigy';
    	if( $_POST['username'] == $login && $_POST['password'] == $password){
    		$_SESSION['pseudo'] = 'Ellipsigy';
    		$_SESSION['Allowed'] = 1;
    		echo 'Success';
    	}
    	elseif ($_POST['username'] != $login) {
    		echo 'wgLogin';
    	}
    	elseif ($_POST['password'] != $password){
    		echo 'wgPassword';
    	}
    }

?>
