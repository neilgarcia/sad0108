$(document).ready(function(){

    $("form").on('submit',function(event){
                
                     
                event.preventDefault();
                data = $(this).serialize();
                
                $.ajax({

                  type: "POST",
                  url: "PHP/addShirts.php",
                  data: data,
                  success: function(data) {
                    
                  },
                  error: function(xhr, status, error) {
                    alert(error);
                   },
                   dataType: 'text'

                });
                
            });

      

  });