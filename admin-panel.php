<?php
session_start(); // On démarre la session AVANT toute chose
?>
<head>
	<?php 
	if (isset($_SESSION['Allowed']) && $_SESSION['Allowed'] == 1){
		include('include/header.php');
	}
	else {
		header('Location: admin.php');
	}
	?>
	<link rel="stylesheet" href="assets/css/fileUpload.css" />
</head>
<body class = 'adminBody'>
	<form id='imageUpload'>
		<div class="file-upload">
		  <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Ajouter une image</button>

		  <div class="image-upload-wrap">
		    <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" id='file'/>
		    <div class="drag-text">
		      <h3>Faîtes glisser une image ou cliquez sur le bouton</h3>
		    </div>
		  </div>
		  <div class="file-upload-content">
		    <img class="file-upload-image" src="#" alt="your image" />
		    <div class="image-title-wrap">
		      <button type="button" onclick="removeUpload()" class="remove-image">Retirer <span class="image-title">Image</span></button>
		    </div>
		  </div>
		  	<h5>Bâtiment concerné</h5>
			<select id='batiment'>
				<?php
					$tab = 'construction';
					$condition = '*';
					include('include/dbConnection.php');
					while ($d = $response->fetch()){
						$nom = $d['Nom'];
						echo '<option value = "'.$nom.'">'.$nom.'</option>';
					}
				?>
			</select>
			<button class="file-upload-btn" type="button" id='nouveauBatiment'>Nouvelle construction</button>
			<br>
			<input type="checkbox" id="isIndex" value="male">Image présente sur la page d'accueil<br>
	  		<input type="checkbox" id="isCatIndex" value="female">Image présente sur la page de la catégorie<br>
	  		<button class="file-upload-btn" type="button" id='valid'>Valider</button>
		</div>
	</form>
	<div class='newConstructionForm'>
		<h5>Nom du nouveau batiment</h5>
		<input  type="text" id='nom' /><br />
		<h5>Description du bâtiment</h5>
		<textarea rows="4" cols="50" id='description'></textarea>
		<br>
		<select id='category'>
		  	<option value="exten">Nouvelle Extension</option>
		  	<option value="maison">Nouvelle Maison neuve</option>
		  	<option value="renov">Nouvelle Rénovation</option>
		</select>
		<button class="file-upload-btn" type="button" id='newConstruction'>Valider</button>
	</div>
	<script language="javascript" type="text/javascript" src="assets/js/fileUpload.js"></script>
</body>