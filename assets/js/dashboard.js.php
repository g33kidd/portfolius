<?php include_once('../../system/init.php'); ?> <?php header("content-type: application/x-javascript"); ?>$(document).ready(function() {	var user_site_count = <? echo user_site_count(); ?>;	var acct_type = <? echo userinfo('acct_type'); ?>;	var mainContainer = $("#main");	var currentPage = 'dashboard';	var lastPage = '';	//updateUrl(currentPage);	//loadPage(page);	$('div.page-container').find('.active').css('display', 'block');	$("a[data-dash-page]").click(function(e) {		e.preventDefault();		if(currentPage != $(this).data('dash-page')){			lastPage = currentPage;			currentPage = $(this).data('dash-page');			changePage(currentPage);		}	});	$('a[data-add-site]').click(function(e) {		e.preventDefault();		var action = $(this).data('add-site');		$.ajax({			type: "POST",			url: "system/request/post.php",			data: {request:action}		}).done(function(msg){		});	});	$('a[data-site-id]').click(function(e) {		e.preventDefault();		updateSitePane($(this).data('site-id'));	});	function changePage() {		$('#'+lastPage).fadeOut('200',function() {			$('#'+currentPage).fadeIn('300');		});	}	function updateSitePane(id) {		$.ajax({			type: "POST",			url: "system/request/get.php",			data: {request:"site_data",site_id:id},			dataType: "json"		}).done(function(msg) {			var site_id = msg.data.id;			var site_title = msg.data.title;			var theme = msg.data.theme;			console.log(msg);		});	}	function sites_num() {		$.ajax({			type:"POST",			url: "system/request/get.php",			data: {request:"num_sites"}		}).done(function(msg) {			return msg;		});	}});