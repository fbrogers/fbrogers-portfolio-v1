// JavaScript Document
$(document).ready(function(){
														
	$('a.lavalink').click(function(){
		$("#b5 > table").hide(); 
		$("#b5 > table#"+($(this).attr("rel"))).fadeIn();						  
	});

	$('a.volcanolink').click(function(){
		$("#b7 > div.text").hide(); 
		$("#b7 > div#"+($(this).attr("rel"))).fadeIn();						  
	});

	$(".button").tooltip({
		opacity: 0.9,
		position: "top center",
		effect: 'slide',
		slideInSpeed: 100,
		slideOutSpeed: 100,
		slideFade: 'true'
	});

	$("#icons > img").click(function(){
		$("#section_youtube").find("div.videoBox").hide(); 
		$("div#"+($(this).attr("alt"))).fadeIn();
	});
	
	$("#icons > img").hover(function(){
		$('#section_youtube > h1').html('').append($(this).attr("title")); 
	});

	//show all
	$("a#all").click(function(){
		$("div.box").slideDown();
		$("div.divider").slideDown();
	
	});

	$("a.fancy").fancybox({
		'padding': 10,
		'overlayOpacity': 0.5,
		'zoomSpeedIn': 300, 
		'zoomSpeedOut': 300,
		'zoomOpacity': true
	});
	
	$("a.fancyajax").fancybox({
		'padding': 10,
		'overlayOpacity': 0.5,
		'zoomSpeedIn': 300, 
		'zoomSpeedOut': 300,
		'zoomOpacity': true,
		'frameWidth': 600,
		'frameHeight': 400,
		'hideOnContentClick': false
	});
	
	$("#slit > a").click(function(){
		$("#content").find("div.box").hide(); 
		$(".divider").hide(); 
		$("div#section_"+($(this).attr("id"))).slideDown({
			duration: 400,
			easing: 'easeInQuad'
		});
	});
	
	$("ul.fancy li").fadeTo("0", 0.7);

	$("ul.fancy li").hover(function() {
		$(this).css({'z-index' : '10'}); /*Add a higher z-index value so this image stays on top*/ 
		$(this).find("img").removeClass("icon");
		$(this).find("img").addClass("iconLarge");
		$(this).fadeTo("100", 1); 
	} , function() {
		$(this).css({'z-index' : '0'}); /* Set z-index back to 0 */
		$(this).find("img").removeClass("iconLarge");
		$(this).find("img").addClass("icon");
		$(this).fadeTo("100", 0.7); 
	});
		
	//Partial Sliding (Only show some of background)  
	$('.boxgrid.peek').hover(function(){          
		$(".cover", this).stop().animate({top:'60px'},{queue:false,duration:160});  
		}, function() {  
		$(".cover", this).stop().animate({top:'90px'},{queue:false,duration:160});  
	}); 
	
});
