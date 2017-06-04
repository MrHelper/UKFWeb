$(document).ready(function(){       
   		var scroll_start = 0;

   		var offset = 50;

	   $(document).scroll(function() { 
	      scroll_start = $(this).scrollTop();
	      if(scroll_start > offset) { 		
	          $("header .navbar-custom").css({ 'background-color': '#fff','box-shadow':'0 3px 5px 2px rgba(0,0,0,0.5)', '-webkit-box-shadow':'0 3px 5px 2px rgba(0,0,0,0.5)', '-moz-box-shadow':'0 3px 5px 2px rgba(0,0,0,0.5)','-o-box-shadow':'0 3px 5px 2px rgba(0,0,0,0.5)'});
	       		$("header .navbar-custom a").css('color','#000');
	       		$("header .navbar-custom .active a").css('color','#fff');
	       } else {
	          $('header .navbar-custom').css({'background-color' :'transparent', 'box-shadow':'none','-webkit-box-shadow':'none'});
	       		$("header .navbar-custom a").css('color','#fff');
	       }
	   });

});