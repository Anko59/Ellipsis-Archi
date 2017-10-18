<head>
	<?php include("include/header.php"); ?>
	<link rel="stylesheet" href="assets/css/admin.css" />
</head>
<body>
	<div id="warp">
  <form id="formu">
    <div class="admin">
      <div class="rota">
        <h1>ADMIN</h1>
        <h4 id ='wgLogin'>Nom d'uilisateur inconnu</h4>
        <input id="username" type="text" name="username" value="" placeholder="Username" /><br />
        <h4 id ='wgPassword'>Mauvais mot de passe</h4>
        <input id="password" type="password" name="passsword" value="" placeholder="Password" />
      </div>
    </div>
    <div class="cms">
      <div class="roti">
        <h1>Ellipsis</h1>
        <button id="valid" type="button" name="valid">Valider</button><br />
        <p><a href="#">Aide</a></p>
      </div>
    </div>
  </form>
  <script language="javascript" type="text/javascript" src="http://localhost/EllipsisArchi/assets/js/admin.js"></script>
</div>
</body>