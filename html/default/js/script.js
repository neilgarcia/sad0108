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
                      setTimeout(function () {
                         window.location.replace('http://localhost/sad0108/html/default/home.php');
                      }, 2000);
                      
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

      $('#button').click(function(){
        event.preventDefault();
        
        data = $('#reg').serialize();
        $.ajax({
          type: "POST",
          url: "PHP/register.php",
          data: data,
          success: function(result){
            
              if(result==1){
                $('#signupResult').text('Username Already Exist!');
                $('#signupResult').css('color','red');
              }else if(result==3){
                $('#signupResult').text('Please complete all fields!');
                $('#signupResult').css('color','red');
              }else if(result==4){
                $('#signupResult').text('Password does not match!');
                $('#signupResult').css('color','red');
              }else{
                $('#signupResult').text('Registration Successful!');
                $('#signupResult').css('color','#828282');
                setTimeout(function () {
                  window.location.replace('http://localhost/sad0108/html/default/registration.php');
                }, 2000);

              }
              $('#signupResult').fadeIn(500);
              $('#signupResult').delay(1000).fadeOut(500);
          }
        });
        
    });

	});