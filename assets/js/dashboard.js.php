<?php header("content-type: application/x-javascript"); ?>$(document).ready(function() {		var user_site_count = 1;	var main = $("#main");	var page = 'main';	loadPage(page);	$("a[data-dash-page]").click(function(e) {		e.preventDefault();		if(page != $(this).data('dash-page')){			page = $(this).data('dash-page')			loadPage(page);		}	});	function loadPage(page) {		main.fadeOut(200, function() {			main.load('dashboard/'+ page + '.php', function() {				main.fadeIn(200)			})		})	}});