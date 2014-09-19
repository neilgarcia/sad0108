  $(document).ready(function(){

    //$(document).on('click','.close_box',function(){
     //alert($(this).parent().find('#prodTotal').html());
    
    //});
  $("form").on('submit',function(event){
                
                     
                event.preventDefault();
                data = $(this).serialize();
                
                $.ajax({

                  type: "POST",
                  url: "PHP/signin.php",
                  data: data,
                  success: function(data) {
                    alert(data);
                    if(data==1){
                      $('#status').css('color','black');
                      $('#status').text('Login successful!');
                      $('#status').fadeIn(500);
                      $('#status').delay(1000).fadeOut(500);
                      setTimeout(function () {
                         window.location.replace('http://localhost/sad0108/html/default/index.php');
                      }, 2000);
                      
                    }else if(data==3){

                      $('#status').css('color','black');
                      $('#status').text('Login successful!');
                      $('#status').fadeIn(500);
                      $('#status').delay(1000).fadeOut(500);
                      setTimeout(function () {
                         window.location.replace('http://localhost/sad0108/html/default/index.php?action=admin');
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
    
    


 

  });