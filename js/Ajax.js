// JavaScript Document
$(document).ready(function(){
	
	/*
	AJAX is the process where we can call directly to a web server from Javascript
	and load other information, e.g. an HTML file, PHP + MySql results, etc.
	*/
	$('.ajax-in').on('click', function (ev) {

		// AJAX Paths are relative to the HTML file, not the CSS files
		$('.fill-me').load('ajax-in.html');
	
	});
	
});