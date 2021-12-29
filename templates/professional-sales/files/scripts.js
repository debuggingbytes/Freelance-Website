$(document).ready(function () {
"use strict";
	
	/***********************************
	 		NAVIGATION SCRIPTS
	************************************/
	
	$('.fa-bars').click(function(){
		$('.primary').css('left','0');
		$('.header-links').css('left','20px');
		$('.nav-closer').css('left','255px');
		$('.nav-opener').css('opacity','0.2');
		$('#wrapper').css('opacity','0.2');
	});
	
	$('.nav-closer').click(function(){
		$('.primary').css('left','-315px');
		$('.header-links').css('left','-295px');
		$('.nav-closer').css('left','-60px');
		$('.nav-opener').css('opacity','1');
		$('#wrapper').css('opacity','1');
	});
	
	
	
	
	
	/***********************************
	 		  ONPAGE SCRIPT
	************************************/
	var theURL = window.location.toString();
	
	var searchURL = theURL.search('default');
	if (searchURL !== -1) {$('.home-nav').addClass('onpage');}
		
	searchURL = theURL.search('about');
	if (searchURL !== -1) {$('.about-nav').addClass('onpage');}

	searchURL = theURL.search('inventory');
	if (searchURL !== -1) {$('.inventory-nav').addClass('onpage');}

	searchURL = theURL.search('financing');
	if (searchURL !== -1) {$('.financing-nav').addClass('onpage');}

	searchURL = theURL.search('contact');
	if (searchURL !== -1) {$('.contact-nav').addClass('onpage');}

	
	
	
	
	
	/***********************************
		  CRANE REQUEST POPUP SCRIPT
	************************************/	
	$('#cat__requests a').click(function(){	$('#crane-request-popup').show(); });	
	$('#request-closer').click(function(){ $('#crane-request-popup').hide(); });

	
	
});























