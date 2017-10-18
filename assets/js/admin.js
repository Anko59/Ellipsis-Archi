$("#valid").click(function() {
	$('#wgPassword').hide();
	$('#wgLogin').hide();
	var post_data = {
		username: $('#username').val(),
		password: $('#password').val()
	}
	$.post('include/forms/login.php', post_data, function(data){
		if (data == 'Success'){
			$(".admin").addClass("up").delay(100).fadeOut(100);
 			$(".cms").addClass("down").delay(150).fadeOut(100);
 			setTimeout(function(){
 				window.location.href = 'http://localhost/EllipsisArchi/admin-panel.php';
 			},1500);
		}
		else if (data == 'wgPassword'){
			$('#wgPassword').slideDown(1000);
		}
		else if (data == 'wgLogin'){
			$('#wgLogin').slideDown(1000);
		}
	})
})
