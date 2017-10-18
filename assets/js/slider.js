/* Essai slider resize en fonction de la taille des images, la flemme de finir
jQuery(document).ready(function ($) {
  var slideWidthList = [];
  var leftImagedId = 0;
  var rightImageId = 0;
  for (var i = 0; i < $('.slide').length;i++){
    var slide = $('.slide').eq(i);
    var img = new Image;
    var url = slide.css('background-image').replace('url("http://localhost/EllipsisArchi/','').replace('")','')
    img.src = url;
    var bgImgWidth = img.width;
    var bgImgHeight = img.height;
    var resizedImageHeight = $('#slider').eq(0).height();
    var resizedImageWidth = bgImgWidth * (resizedImageHeight / bgImgHeight);
    slide.width(resizedImageWidth);
    slideWidthList.push(resizedImageWidth);
    if (slideWidthList.reduce((pv, cv) => pv+cv, 0) < $('#slider').eq(0).width()){
        rightImageId = i;
    }

  }
  $('#checkbox').change(function(){
    setInterval(function () {
        moveRight();
    }, 3000);
  });
    console.log(slideWidthList, leftImagedId, rightImageId);
	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        var distance = 
        $('#slider ul').animate({
            left: + slideWidthList[leftImagedId]
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
            leftImagedId ++;
            rightImageId;
            if (leftImagedId>slideWidthList.length){
                leftImagedId = 0;
            }
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidthList[leftImagedId]
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
            rightImageId++;
            leftImagedId ++;
            if (rightImageId > slideWidthList.length){
                rightImageId = 0;
            }
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

}); 
*/
jQuery(document).ready(function ($) {

  $('#checkbox').change(function(){
    setInterval(function () {
        moveRight();
    }, 3000);
  });
  
    var slideCount = $('#slider ul li').length;
    var slideWidth = $('#slider ul li').width();
    var slideHeight = $('#slider ul li').height();
    var sliderUlWidth = slideCount * slideWidth;
    
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});    