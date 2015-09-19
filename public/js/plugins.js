$(document).ready(function(){

	"use strict";

	$('.carousel').carousel({
		interval: 6000
	});

	// Show Color Option Div When Click On The Gear
	$(".gear-check").click(function(){
		$(".color-option").fadeToggle();
	});

	// Change Them Color On Click

	var coloLi = $(".color-option ul li");

	coloLi
		.eq(0).css("backgroundColor","#E41B17").end()
		.eq(1).css("backgroundColor","#E426D5").end()
		.eq(2).css("backgroundColor","#009AFF").end()
		.eq(3).css("backgroundColor","#FFD500");

	coloLi.click(function(){
		$("link[href*='theme']").attr("href", $(this).attr("data-value"));
	});

	// Catching the scroll top Elements

	var scrollButton = $("#scroll-top");

	$(window).scroll(function(){
		$(this).scrollTop() >= 700 ? scrollButton.show() : scrollButton.hide();
	});

	// click on button to scroll top

	scrollButton.click(function(){
		$("html,body").animate({ scrollTop : 0}, 600);
	});
});
$(window).load(function()
{
	"use strict";
	
	// Show The Scroll

	$("body").css("overflow","auto");

	// Loading Elements

	$(".loading-overlay h1").fadeOut(2000,
	function()
	{
		$(this).parent().fadeOut(2000,
		function()
		{
			$(this).remove();
		});
	});
});