function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
  });
  $('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');
});


$("#valid").click(function() {
  if ($('#isIndex').is(':checked')) {
    var isIndex = 1;
  }
  else {
    var isIndex = 0;
  }
  if ($('#isCatIndex').is(':checked')) {
    var isCatIndex = 1;
  }
  else {
    var isCatIndex = 0;
  }
  var formData = new FormData();
  formData.append('file', $('#file').prop('files')[0]);
  formData.append('batiment',$('#batiment :selected').text());
  formData.append('isIndex',isIndex);
  formData.append('isCatIndex',isCatIndex);
  for (var pair of formData.entries()) {
    console.log(pair[0]+ ', ' + pair[1]); 
  }
  $.ajax({
    url: 'include/forms/upload.php',
    dataType: 'text',
    cache: false,
    contentType: false,
    processData: false,
    data: formData,
    type: 'POST',
    success: function(res){
      alert(res);
      removeUpload();
    }
  });  
});
$('#nouveauBatiment').click(function(){
  $('#imageUpload').slideUp(500);
  $('.newConstructionForm').slideDown(500);
  console.log('faaaaaade');
});
$('#newConstruction').click(function(){
  var post_data = {
    nom: $('#nom').val(),
    description: $('#description').val(),
    category: $('#category').val()
  }
  $.post('include/forms/newConstruction.php', post_data, function(data){
    if (data == 'Success'){
      $('#imageUpload').slideDown(500);
      $('.newConstructionForm').slideUp(500);
    }
    else {
      alert(data);
    }
  });
});
