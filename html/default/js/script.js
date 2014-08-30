	$(document).ready(function(){

		$("form").on('submit',function(event){
                
                     
                event.preventDefault();
                data = $(this).serialize();
                
                $.ajax({

                  type: "POST",
                  url: "PHP/signin.php",
                  data: data,
                  success: function(data) {
                  	if(data==1){
                  		$('#status').css('color','black');
                  		$('#status').text('Login successful!');
                  		$('#status').fadeIn(500);
                  		$('#status').delay(1000).fadeOut(500);
                  	}else{
                  		$('#status').css('color','red');
                  		$('#status').text('Invalid Login!');
                  		$('#status').fadeIn(500);
                  		$('#status').delay(1000).fadeOut(500);
                  		
                  	}
                  },
                  error: function(xhr, status, error) {
                    alert(error);
                   },
                   dataType: 'text'

                });
                
            });
	});