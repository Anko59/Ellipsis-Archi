<!DOCTYPE html>

<?php
// Couleur du texte des champs si erreur saisie utilisateur
$color_font_warn="#FF0000";
// Couleur de fond des champs si erreur saisie utilisateur
$color_form_warn="#FFCC66";
// Ne rien modifier ci-dessous si vous n’êtes pas certain de ce que vous faites !
if(isset($_POST['submit'])){
	$erreur="";
	// Nettoyage des entrées
	while(list($var,$val)=each($_POST)){
	if(!is_array($val)){
		$$var=strip_tags($val);
	}else{
		while(list($arvar,$arval)=each($val)){
				$$var[$arvar]=strip_tags($arval);
			}
		}
	}
	// Formatage des entrées
	$f_1=trim(ucwords(eregi_replace("[^a-zA-Z0-9éèàäö\ -]", "", $f_1)));
	$f_2=trim(ucwords(eregi_replace("[^a-zA-Z0-9éèàäö\ -]", "", $f_2)));
	$f_3=strip_tags(trim($f_3));
	$f_4=trim(eregi_replace("[^0-9\ +]", "", $f_4));
	$f_5=trim(ucwords(eregi_replace("[^a-zA-Z0-9éèàäö\ -]", "", $f_5)));
	// Verification des champs
	if(strlen($f_1)<2){
		$erreur.="<li><span class='txterror'>Le champ &laquo; Nom &raquo; est vide ou incomplet.</span>";
		$errf_1=1;
	}
	if(strlen($f_2)<2){
		$erreur.="<li><span class='txterror'>Le champ &laquo; Prénom &raquo; est vide ou incomplet.</span>";
		$errf_2=1;
	}
	if(strlen($f_3)<2){
		$erreur.="<li><span class='txterror'>Le champ &laquo; E-Mail &raquo; est vide ou incomplet.</span>";
		$errf_3=1;
	}else{
		if(!ereg('^[-!#$%&\'*+\./0-9=?A-Z^_`a-z{|}~]+'.
		'@'.
		'[-!#$%&\'*+\/0-9=?A-Z^_`a-z{|}~]+\.'.
		'[-!#$%&\'*+\./0-9=?A-Z^_`a-z{|}~]+$',
		$f_3)){
			$erreur.="<li><span class='txterror'>La syntaxe de votre adresse e-mail n'est pas correcte.</span>";
			$errf_3=1;
		}
	}
	if(strlen($f_6)<2){
		$erreur.="<li><span class='txterror'>Le champ &laquo; Votre message &raquo; est vide ou incomplet.</span>";
		$errf_6=1;
	}
	if($erreur==""){
		// Création du message
		$titre="SITE : ".$f_5."\n\n";
		$tete="From:$f_3\n\n";
		$corps.="Nom : ".$f_1."\n";
		$corps.="Prénom : ".$f_2."\n";
		$corps.="E-Mail : ".$f_3."\n";
		$corps.="Téléphone : ".$f_4."\n";
		$corps.="Objet : ".$f_5."\n";
		$corps.="Votre message : ".$f_6."\n";
		if(mail("leclercqarchi@wanadoo.fr,sebastien.segers@ellipsis.archi,celine.leurent@ellipsis.archi", $titre, stripslashes($corps), $tete)){
			$ok_mail="true";
		}else{
			$erreur.="<li><span class='txterror'>Une erreur est survenue lors de l'envoi du message, veuillez refaire une tentative.</span>";
		}
	}
}
?>


<html>
    <head>
<meta charset="utf-8" />
        
<title>Ellipsis, Architectes à Villeneuve d'Ascq</title>

<meta name="Description" content="Agence d’architecture située à Villeneuve d’Ascq, nous réalisons tout type de construction ou de rénovation. Habitat, bureaux, commerces, bâtiments industriels ou tertiaires, nous vous accompagnons dans la conception et la réalisation de votre projet, depuis les premières esquisses, jusqu’à la réception de chantier. ">

<meta name="Keywords" content="architecte, 59, architectes, architecture, leclercq, ellipsis, leclercq-ellipsis, villeneuve d'ascq, nord, lille, céline leurent, sébastien segers, construction, rénovation, chantier "/>

<meta name="Content-Language" content="fr">
<meta name="Copyright" content="Copyright ©2015 - Tout droits réservés. All right reserved">
<meta name="Author" content="Tanguy Prouvost">
<meta name="Identifier-Url" content="http://www.ellipsis.archi">
<meta name="Reply-To" content="leclercqarchi@wanadoo.fr">
<meta name="Revisit-After" content="5 days">
<meta name="Robots" content="index, follow">
<meta name="Rating" content="general">
<meta name="Distribution" content="global">
<meta name="Geography" content="59">
<meta name="Category" content="internet">

<link rel="stylesheet" href="style.css" />
<link rel="shortcut icon" href="images/favicon2.ico" type="image/x-icon">
<link rel="icon" href="images/favicon2.ico" type="image/x-icon">

</head>

<body bgcolor="#000000">
<SCRIPT SRC=wz_tooltip_presentation.js></SCRIPT>

<div id="conteneur">

<table width="100%">


<tr>
<td width="267" height="267" align="center"><a href="index.html"><img src="images/logo220.jpg" alt="logo Ellipsis Architecture" onMouseOver="javascript:this.src='images/retour220.png';" onMouseOut="javascript:this.src='images/logo220.jpg';" border="0" />  </a></td> 
<td width="266" height="266"><aside>
<div id="gris">Leclercq  Ellipsis</div>
    8 Avenue de la Créativité<br>
    59650 Villeneuve d'Ascq<br>
    <br>
    Tél : 03.20.41.28.40 <br>
    Fax : 03.20.41.37.87<br>
    <br>
    <a href= "mailto:leclercqarchi@wanadoo.fr"> leclercqarchi@wanadoo.fr</a></aside></td> 
<td width="267" height="267" align="center"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2530.2956746135087!2d3.1467001!3d50.640199700000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c329d4e7f9be89%3A0x79a5386478f15e05!2s8+Avenue+de+la+Cr%C3%A9ativit%C3%A9%2C+59650+Villeneuve-d&#39;Ascq!5e0!3m2!1sfr!2sfr!4v1426857005983" width="220" height="220" frameborder="0" style="border:0"></iframe></td>
</tr>
</table>


<table width="100%" height="266">
<tr>

<td><? if($ok_mail=="true"){ ?>
	<table width='100%' border='0' cellspacing='1' cellpadding='1'>
		<tr>
		  <td><span class='txtform'>Votre message nous a bien été transmis et nous vous en remercions.</span></td></tr>
		<tr><td><span class='txtform'>Nous allons y donner suite dans les meilleurs délais.<br>A bientôt.</span></td></tr>
	</table>
<? }else{ ?>
<form action='<? echo $PHP_SELF ?>' method='post' name='Form'>
<div id="gris">Laissez-nous votre message :</div>
<table width='100%' border='0' cellspacing='1' cellpadding='1'>
<? if($erreur){ ?><tr><td colspan='2' bgcolor='red'><span class='txterror'><font color='white'><b>&nbsp;ERREUR, votre message n'a pas été transmis</b></font></span></td></tr><tr><td colspan='2'><ul><?echo$erreur?></ul></td></tr><?}?>
<tr><td align='right' width='17%'><span class='txtform'>Nom* :</span></td><td width="83%"><input type='text' style='width:200 <?if($errf_1==1){print("; background-color: ".$color_form_warn."; color: ".$color_font_warn);}?>;' name='f_1' value='<?echo stripslashes($f_1);?>' size='24' border='0'></td></tr>
<tr><td align='right' width='17%'><span class='txtform'>Prénom* :</span></td><td><input type='text' style='width:200 <?if($errf_2==1){print("; background-color: ".$color_form_warn."; color: ".$color_font_warn);}?>;' name='f_2' value='<?echo stripslashes($f_2);?>' size='24' border='0'></td></tr>
<tr><td align='right' width='17%'><span class='txtform'>E-Mail* :</span></td><td><input type='text' style='width:200 <?if($errf_3==1){print("; background-color: ".$color_form_warn."; color: ".$color_font_warn);}?>;' name='f_3' value='<?echo stripslashes($f_3);?>' size='24' border='0'></td></tr>
<tr><td align='right' width='17%'><span class='txtform'>Téléphone :</span></td><td><input type='text' style='width:200 <?if($errf_4==1){print("; background-color: ".$color_form_warn."; color: ".$color_font_warn);}?>;' name='f_4' value='<?echo stripslashes($f_4);?>' size='24' border='0'></td></tr>
<tr><td align='right' width='17%'><span class='txtform'>Objet :</span></td><td><input type='text' style='width:200 <?if($errf_5==1){print("; background-color: ".$color_form_warn."; color: ".$color_font_warn);}?>;' name='f_5' value='<?echo stripslashes($f_5);?>' size='24' border='0'></td></tr>
<tr><td align='right' width='17%' valign="top"><span class='txtform'>Votre message* :</span></td><td><textarea style='width:360 <?if($errf_6==1){print("; background-color: ".$color_form_warn."; color: ".$color_font_warn);}?>;' name='f_6' rows='4' cols='40'><?echo$f_6?></textarea></td></tr>
<tr><td align='right' width='17%'></td><td><input type='submit' name='submit' value='Envoyer' border='0'></td></tr>
</table>
</form>
<? } ?></td> 

</tr>
</table>

<table width="100%">
<tr>
<td width="267" height="267" align="center"></td> 
<td width="266" height="266" ><aside><div id="gris"> C&eacute;line Leurent</div>
    Tel : 06 33 70 82 25<br />
  <a href= "mailto:celine.leurent@ellipsis.archi">celine.leurent@ellipsis.archi</a> 
  <br />
  <br>
  <br>
<div id="gris"> S&eacute;bastien Segers</div> 
    Tel : 06 01 88 44 55 <a href= "mailto:sebastien.segers@ellipsis.archi">sebastien.segers@ellipsis.archi</a>
</aside></td> 
<td width="267" height="267" align="center">
  <br><img src="images/flashcode150.jpg" > <br>
  <br>
  www.facebook.com/leclercq.ellipsis</td>
</tr>

</table>

</div>
</body>
</html>
