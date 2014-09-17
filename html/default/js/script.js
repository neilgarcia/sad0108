	$(document).ready(function(){

    //$(document).on('click','.close_box',function(){
     //alert($(this).parent().find('#prodTotal').html());
    
    //});
    $('input:text').keyup(function () {
      var price = $(this).parent().find('#prodPrice').text();
      var quantity = $(this).parent().find('#prodQuantity').val();
      var total = quantity*price;

      $(this).parent().find('#prodTotal').text(total);
    });
    $(".close_box").unbind().click(function() {
      var id = $(this).parent().find('#prodID').text();
      var quantity = $(this).parent().find('#prodQuantity').val();

      $(this).parent().fadeTo(300,0,function(){
            $(this).remove();
        });
        $.ajax({
            type: "POST",
            url: "php/removeCart.php",
            data: {quantity: quantity, id: id},
            success: function(result){
                
             
            },error: function(xhr, status, error) {
                      alert(error);
                     },
                     dataType: 'text'

          });
    });

    
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
                  window.location.replace('http://localhost/sad0108/html/default/index.php');
                }, 2000);

              }
              $('#signupResult').fadeIn(500);
              $('#signupResult').delay(1000).fadeOut(500);
          }
        });
        
    });

    $('#btnCart').click(function(){
        event.preventDefault();
        
        data = $('#orderForm').serialize();
        $.ajax({
          type: "POST",
          url: "php/orderIt.php",
          data: data,
          success: function(result){
            alert('Product Added to Cart!');
            $.fancybox.close();
          },error: function(xhr, status, error) {
                    alert(error);
                   },
                   dataType: 'text'

        });
        
        
    });

    $('#quantity').keyup(function () {

      var quantity = $('#quantity').val();
      var price = $('#price').text();
      $('#tprice').text(quantity*price);

    });

    $(".fancybox").fancybox();

    $('.link').on('click', function(){
      var id = this.id;
      $.fancybox({
          width: 300,
          height: 320,
          padding: 30,
          autoSize: false,
          href: 'php/order.php?id=' + id,
          type: 'ajax'
      });
  });
  $('.link2').on('click', function(){
      var id = this.id;
      $.fancybox({
          width: 300,
          height: 320,
          padding: 30,
          autoSize: false,
          href: 'php/mycart.php',
          type: 'ajax'
      });
  });

	});