let burger = document.getElementById("burger-button");
var firstImageSource = 'empty';
burger.addEventListener("click", (e) => {
  e.preventDefault();
  document.body.classList.toggle("open");
  burger.classList.toggle("open");
  var firstImage = $('img').eq(0);
  if(firstImageSource == 'empty'){
  	firstImageSource = firstImage.attr('src');
  }
  if (firstImage.attr('src') == 'assets/img/black.png'){
  	firstImage.attr('src',firstImageSource);
  }
  else {
  	firstImage.attr('src', 'assets/img/black.png');	
  }
});