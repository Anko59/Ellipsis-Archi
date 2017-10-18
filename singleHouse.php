<!DOCTYPE html>
<html>
<head>
	<?php include('include/header.php'); ?>
	<link rel="stylesheet" href="assets/css/slider.css">
</head>
<body class = 'defaultBody'>
	<div id="slider">
	    <a href="#" class="control_next">></a>
	    <a href="#" class="control_prev"><</a>
	    <ul>
	    	<?php
	    	$directoryName = 'assets/img/nouvelles/Dual/Slider';
	    	$rootFile = $directoryName.'/1';
	    	$dir = new DirectoryIterator(dirname($rootFile)); // itération à travers le directory
			foreach ($dir as $fileinfo) {
				if (!$fileinfo->isDot()) {
					echo '<li style="background-image:url('.$directoryName.'/'.$fileinfo->getFilename().');" class="slide"></li>';
				}
			}
	    	?>
	    </ul>  
  </div>
	<script language="javascript" type="text/javascript" src="assets/js/slider.js"></script>
</body>
</html>