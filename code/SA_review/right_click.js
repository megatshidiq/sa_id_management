$(document).ready(function () {
		$("html").on("contextmenu",function(e){
		       //prevent default context menu for right click
		       e.preventDefault();

		       var menu = $(".menu");

		       //hide menu if already shown
		       menu.hide();

		       //get x and y values of the click event
		       var pageX = e.pageX;
		       var pageY = e.pageY;

		       //position menu div near mouse cliked area
		       menu.css({top: pageY , left: pageX});

		       var mwidth = menu.width();
		       var mheight = menu.height();
		       var screenWidth = $(window).width();
		       var screenHeight = $(window).height();

		       //if window is scrolled
		       var scrTop = $(window).scrollTop();

		       //if the menu is close to right edge of the window
		       if(pageX+mwidth > screenWidth){
		       	menu.css({left:pageX-mwidth});
		       }

		       //if the menu is close to bottom edge of the window
		       if(pageY+mheight > screenHeight+scrTop){
		       	menu.css({top:pageY-mheight});
		       }

		       //finally show the menu
		       menu.show();
		});

		$("html").on("click", function(){
			$(".menu").hide();
		});
	});
