$(document).ready(function(){
	
	$('#mode').change(function () {
		if ($(this).val() == 'Webroom1'|| $(this).val() == 'Reserve') {
			$("#vcid").removeAttr("disabled");
			$("#vcid").focus();
		} else {
			$("#vcid").attr("disabled", "disabled");
		}	
	});

	document.getElementById("todaysvc").onclick = function() {OpenWindow()};
	function OpenWindow() {		
		window.open ('show_todays_vc_details.php', 'newwindow', config='height=500, width=1000, toolbar=no, menubar=no, scrollbars=yes,  resizable=no, location=no, directories=no, status=no');
	}
	
});


  
/*global jQuery:false */
(function ($) {
		//jQuery to collapse the navbar on scroll
	$(window).scroll(function() {
		if ($(".navbar").offset().top > 50) {
			$(".navbar-fixed-top").addClass("top-nav-collapse");
			$(".top-area").addClass("top-padding");
			$(".navbar-brand").addClass("reduce");

			$(".navbar-custom ul.nav ul.dropdown-menu").css("margin-top","11px");
		
		} else {
			$(".navbar-fixed-top").removeClass("top-nav-collapse");
			$(".top-area").removeClass("top-padding");
			$(".navbar-brand").removeClass("reduce");

			$(".navbar-custom ul.nav ul.dropdown-menu").css("margin-top","16px");
	
		}
	});
	
	//scroll to top
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollup').fadeIn();
			} else {
			$('.scrollup').fadeOut();
		}
	});
	$('.scrollup').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 1000);
			return false;
	});
	


	//jQuery for page scrolling feature - requires jQuery Easing plugin
	$(function() {
		$('.navbar-nav li a').bind('click', function(event) {
			var $anchor = $(this);
			var nav = $($anchor.attr('href'));
			if (nav.length) {
			$('html, body').stop().animate({				
				scrollTop: $($anchor.attr('href')).offset().top				
			}, 1500, 'easeInOutExpo');
			
			event.preventDefault();
			}
		});
		$('.page-scroll a').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});
	});

	//owl carousel



$(window).load(function() {
	$(".loader").delay(100).fadeOut();
	$("#page-loader").delay(100).fadeOut("fast");
});


// jquery for vc-add form

});