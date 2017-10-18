$(function() {
	//Definition des paramètres
	var tempsEntre2FadeIn = 500;
	var tempsFadeIn = 500;
	var nbrImagesLongueur = 7;
	var ratioImage = 3/4;
	var tempsSlideDown = 1000;
	var delaiSlideDownSubTitle = 2000;
	var delaiAvantSlideDownImages = 100;
	//Fin de la définition des paramètres
	//Début fonction fadeIn images une par une (essai)
	var i = 0;
	var waitTime = tempsEntre2FadeIn;
	function fadeInImages(){
    	if (i < $('.squaredImage').length){
			image = $('.squaredImage').eq(i);
			previousImage = $('.squaredImage').eq(i-1); 
			if (previousImage.offset().top + image.height() < $(window).height()){
				i+=1;
				setTimeout(fadeInImage,waitTime);
			}
			else {
				previousImage.hide();
			}
		}
	}

	function fadeInImage(){
		image.fadeIn(tempsFadeIn);
		fadeInImages();
	}
	//Fin fonction fadeIn

	//Début fonction slideDown, slideIn toute la div de photos d'un coup (essai)
	function slideDownImages(){
		setTimeout(function(){
			$('.imageContainer').show();
		},delaiAvantSlideDownImages);
	}
	//Fin fonction slideDown

	function resizeImages(){ //Resize images en fonction de la taille de la fenêtre
		var width = $(window).width();
		var imgWidth = Math.trunc(width/nbrImagesLongueur);
		var imgHeight = Math.trunc(imgWidth * ratioImage);
		for (var y = 0; y < $('.squaredImage').length; y++){
			var img = $('.squaredImage').eq(y);
			img.attr('width', imgWidth);
			img.attr('height', imgHeight);
		}
		for (var y = 0; y < $('.menuImage').length; y++){
			var img = $('.menuImage').eq(y);
			img.attr('width', imgWidth);
			img.attr('height', imgHeight);
		}
	}

	function showTitle(){  //Display les titres avec un délai en slideDown
		setTimeout(function(){
			$('#title').slideDown(tempsSlideDown);
			$('#subTitle').slideDown(tempsSlideDown);
		},delaiSlideDownSubTitle);
	}

	$( document ).ready(function() {
		showTitle();
		resizeImages();
		slideDownImages();
	});

	$('.squaredImage').on('click',function(){
		$('#largeImage').attr('src', $(this).attr('src'));
		$('#imageDisplayer').fadeIn(tempsFadeIn);
		event.stopPropagation();
	});

	$(window).click(function() {
		$('#imageDisplayer').fadeOut(1000);
	});

	$('#imageDisplayer').on('click', function(){
		$(this).show();
		event.stopPropagation();
	});

	$( window ).resize(function() {
		i = 0;
		resizeImages();
		fadeInImages();
	});

});