  $(document).ready(function(){

    //$(document).on('click','.close_box',function(){
     //alert($(this).parent().find('#prodTotal').html());
    
    //});
    $('.liquid-slider').liquidSlider({
      continuous:false,
      slideEaseFunction: "easeInOutCubic"
    });
    $('input:text').keyup(function () {
      var payTotal = 0;
      var price = $(this).parent().find('#prodPrice').text();
      var quantity = $(this).parent().find('#prodQuantity').val();
      var total = quantity*price;

      $(this).parent().find('#prodTotal').text(total);
      $('div').each(function(){
        if(this.id == 'prodTotal'){
          payTotal = parseInt(payTotal) + parseInt($(this).text());
        }
          
      });
      $('#payPrice').val(payTotal);
      
      $('#totalPrice').text(payTotal);
      $('#prodTotal').text(payTotal);
        
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
                $('#totalPrice').text(result);
                $('#payPrice').val(result);
            },error: function(xhr, status, error) {
                      alert(error);
                     },
                     dataType: 'text'

          });
    });

    
    $('#cQuantity').keyup(function(){

      var price = $(this).val() * 1000;
      $('#cPrice').val(price);
      $('#payPrice').val(price);

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
              }else if(result==5){
                $('#signupResult').text('Invalid Email!');
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
            alert(result);
            $.fancybox.close();
          },error: function(xhr, status, error) {
                    alert(error);
                   },
                   dataType: 'text'

        });
        
        
    });

    $('#paypalCustom').click(function(){
        event.preventDefault();
        
        data = $('#frmColorize').serialize();
       
        $.ajax({
          type: "POST",
          url: "php/customSession.php",
          data: data,
          success: function(result){
            window.location = "?action=custom"
          },error: function(xhr, status, error) {
                    alert(error);
                   },
                   dataType: 'text'

        });
        
        
    });
   
    $('#btnColorize').click(function(){
        event.preventDefault();
        
        data = $('#frmColorize').serialize();
        
        
        $.ajax({
          type: "POST",
          url: "php/colorizer.php",
          data: data,
          success: function(result){
            $('#colorizeShirt').html(result);
          },error: function(xhr, status, error) {
                    alert(error);
                   },
                   dataType: 'text'

        });
        
        
    });
    $('#btnSummary').click(function(){
        event.preventDefault();
        
        $.ajax({
          type: "POST",
          url: "php/addIt.php",
          
          success: function(result){
            alert(result);
          },error: function(xhr, status, error) {
                    alert(error);
                   },
                   dataType: 'text'

        });
        
        
    });
    $('#btnCustomers').click(function(){
        event.preventDefault();
        
        
        
        
        $.ajax({
          type: "POST",
          url: "php/customerView.php",
         
          success: function(result){
            $('#tableContainer').html(result);
          },error: function(xhr, status, error) {
                    alert(error);
                   },
                   dataType: 'text'

        });
        
        
    });

    $('#btnProducts').click(function(){
        event.preventDefault();
        
        
        
        
        $.ajax({
          type: "POST",
          url: "php/productsView.php",
         
          success: function(result){
            $('#tableContainer').html(result);
          },error: function(xhr, status, error) {
                    alert(error);
                   },
                   dataType: 'text'

        });
        
        
    });

    $('#fontTop').click(function(){
        
        $(this).css('border','1px solid black');
        $('#fontBottom').css('border','none');
        $('#fontMiddle').css('border','none');
        $('#fontPosition').val('top');
        
    });
    $('#fontMiddle').click(function(){
        
        $(this).css('border','1px solid black');
        $('#fontTop').css('border','none');
        $('#fontBottom').css('border','none');
        $('#fontPosition').val('middle');
        
    });
    $('#fontBottom').click(function(){
        
        $(this).css('border','1px solid black');
        $('#fontTop').css('border','none');
        $('#fontMiddle').css('border','none');
        $('#fontPosition').val('bottom');
        
    });
    $('#nameTop').click(function(){

      $(this).css('border','1px solid black');
      $('#nameBottom').css('border','none');
      $('#playerName').val('top');
    });
    $('#nameBottom').click(function(){

      $(this).css('border','1px solid black');
      $('#nameTop').css('border','none');
      $('#playerName').val('bottom');
    });
    $('#quantity').keyup(function () {

      var quantity = $('#quantity').val();
      var price = $('#price').text();
      $('#tprice').text(quantity*price);

    });

    $(".fancybox").fancybox();

    $('.link').on('click', function(){
      event.preventDefault();
      var id = this.id;
      $.fancybox({
          width: 600,
          height: 380,
          padding: 30,
          autoSize: false,
          href: 'php/order.php?id=' + id,
          type: 'ajax'
      });
  });
  $('.link2').on('click', function(){
    event.preventDefault();
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