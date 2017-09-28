<div class = "imageContainer hover15" style='display:none;'>
	<?php
		/*
		La liste de photos à afficher est définie en php
		la façon dont les photos sont agencées est définie en Javascript (pas moyen d'accéder au format de l'écran en php car coté serveur)
		*/
		$directoryName = $path; // Nom du directory ou se trouvent les photos à afficher sur la page
		$rootFile = $path.'/1'; //Pour une raison obscure, on doit partir d'une des photos pour itérer dans le doc
		$imageList = array(); 
		$dir = new DirectoryIterator(dirname($rootFile)); // itération à travers le directory
		foreach ($dir as $fileinfo) {
			if (!$fileinfo->isDot()) {
				array_push($imageList, $fileinfo->getFilename());//Ajoute chaque image
			}
		}
		if (isset($menuPath)){
			$rootFile = $menuPath.'/1';
			$pos = array(4,7,11,2,15);
			$menuPos = array();
			$dir = new DirectoryIterator(dirname($rootFile)); // itération à travers le directory
			$i = 0;
			foreach ($dir as $fileinfo) {
				if (!$fileinfo->isDot()) {
					$menuPos[$pos[$i]] = $fileinfo->getFilename();//Ajoute chaque image
					$i += 1;
				}
			}
		}
		$i = 0;
		foreach ($imageList as $image) {  //Itération à travers les images
			if (isset($menuPath)){
				if (in_array($i, array_keys($menuPos))){
					echo '<a href = "http://localhost/EllipsisArchi/'.$menuUrl.str_replace('txt.jpg','', $menuPos[$i]) .'"><figure><img src = ' . $menuPath . '/' . $menuPos[$i] . ' class = menuImage id = '. str_replace('txt.jpg','', $menuPos[$i]).'></figure></a>';
				}
			}
			echo '<figure><img src = '.$directoryName .'/'. $image . ' class = squaredImage id = ' . $image . '></figure>'; //Génération du html pour chaque image
			$i += 1;
		}
	?>
</div>
<div id = "imageDisplayer">
	<img  src=<?php echo $directoryName .'/'. $image ?> id= 'largeImage'>
</div>