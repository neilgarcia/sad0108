$(function () {
  $('.click-nav > ul').toggleClass('no-js js');
  $('.click-nav .js ul').hide();
  $('.click-nav .js').click(function(e) {
    $('.click-nav .js ul').slideToggle(200);
    $('.clicker').toggleClass('active');
    e.stopPropagation();
  });



  $(document).click(function() {
    if ($('.click-nav .js ul').is(':visible')) {
      $('.click-nav .js ul', this).slideUp();
      $('.clicker').removeClass('active');
    }
  });
});

$(function () {
  $('#blockOne').hide();
  $('#linkOne').click(function(e) {
    $('#blockOne').slideToggle(200);
    e.stopPropagation();
  });


  $(document).click(function() {

    if ($('#blockOne').is(':visible')) {
      $('#linkOne', this).slideUp();
    }
  });
});

$(function () {
  $('#blockTwo').hide();
  $('#linkTwo').click(function(e) {
    $('#blockTwo').slideToggle(200);
    e.stopPropagation();
  });


  $(document).click(function() {

    if ($('#blockTwo').is(':visible')) {
      $('#linkTwo', this).slideUp();
    }
  });
});

$(function () {
  $('#blockThree').hide();
  $('#linkThree').click(function(e) {
    $('#blockThree').slideToggle(200);
    e.stopPropagation();
  });


  $(document).click(function() {

    if ($('#blockThree').is(':visible')) {
      $('#linkThree', this).slideUp();
    }
  });
});

$(function () {
  $('#blockFour').hide();
  $('#linkFour').click(function(e) {
    $('#blockFour').slideToggle(200);
    e.stopPropagation();
  });


  $(document).click(function() {

    if ($('#blockFour').is(':visible')) {
      $('#linkFour', this).slideUp();
    }
  });
});

$(function () {
  $('#blockFive').hide();
  $('#linkFive').click(function(e) {
    $('#blockFive').slideToggle(200);
    e.stopPropagation();
  });


  $(document).click(function() {

    if ($('#blockFive').is(':visible')) {
      $('#linkFive', this).slideUp();
    }
  });
});

$(function () {
  $('#blockSix').hide();
  $('#linkSix').click(function(e) {
    $('#blockSix').slideToggle(200);
    e.stopPropagation();
  });


  $(document).click(function() {

    if ($('#blockSix').is(':visible')) {
      $('#linkSix', this).slideUp();
    }
  });
});

$(function () {
  $('#blockSeven').hide();
  $('#linkSeven').click(function(e) {
    $('#blockSeven').slideToggle(200);
    e.stopPropagation();
  });


  $(document).click(function() {

    if ($('#blockSeven').is(':visible')) {
      $('#linkSeven', this).slideUp();
    }
  });
});

$(function () {
  $('#blockEight').hide();
  $('#linkEight').click(function(e) {
    $('#blockEight').slideToggle(200);
    e.stopPropagation();
  });


  $(document).click(function() {

    if ($('#blockEight').is(':visible')) {
      $('#linkEight', this).slideUp();
    }
  });
});

$(function () {
  $('#blockNine').hide();
  $('#linkNine').click(function(e) {
    $('#blockNine').slideToggle(200);
    e.stopPropagation();
  });


  $(document).click(function() {

    if ($('#blockNine').is(':visible')) {
      $('#linkNine', this).slideUp();
    }
  });
});

$(function() {
	$(document).on('focusin', '.field, textarea', function() {
		if(this.title==this.value) {
			this.value = '';
		}
	}).on('focusout', '.field, textarea', function(){
		if(this.value=='') {
			this.value = this.title;
		}
	});

	$('#navigation ul li:first-child').addClass('first');
	$('.footer-nav ul li:first-child').addClass('first');

	mobile();

	$(window).on('resize', function() {
		mobile();
	});
	
	$('#navigation a.nav-btn').click(function(){
		$(this).closest('#navigation').find('ul').slideToggle()
		$(this).find('span').toggleClass('active');
		return false;
	});
});

$(window).load(function() {
 
	$('.flexslider').flexslider({
		animation: "slide",
		controlsContainer: ".slider-holder",
		slideshowSpeed: 5000,
		directionNav: false,
		controlNav: true,
		animationDuration: 2000,
		before:function( slider ){
			$('.img-holder').animate({'bottom' : '-30px'},300)
		},

		after:function( slider ){
			$('.img-holder').animate({'bottom' : '0px'},300)
		}
	});
});

function mobile() {
	var winW = $(window).width();
	if (winW > 750) {
		$('#navigation ul').show()	
	}else{
		$('#navigation ul').hide()
		$('#navigation a.nav-btn span.arr').removeClass('active');
	}
}
 