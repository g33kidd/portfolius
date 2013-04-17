$(document).ready(function() {

	init();
	var realtime = setInterval(function() { live(); }, 10000);

	// Real-Time functionality
	// This will update areas of the site for real time.
	function live() {
		$.ajax({ type:"GET", url:"ajax/get.php", data:{request:"live_info"}, dataType:"json" }).done(function(data) {
			console.log(data);
			updateStats(data.stats);
			updateSiteList(data.sites);
		});
	};

	function init() {
		live();
	}

	// Updates all areas of the site that are stats and info
	function updateStats(stats) {
		// Header Status Boxes
		$('#live-stats-site_num').html(stats.sites);
		$('#live-stats-visits').html(stats.visits);
		$('#live-stats-pageviews').html(stats.pageviews);
		$('#live-stats-unique').html(stats.unique);
		$('#live-stats-revenue').html("$"+stats.revenue);
		$('#live-stats-affiliate').html(stats.affiliate);
		$('#live-stats-reward_coin').html(stats.reward_coin);
		$('#live-stats-cool').html(stats.cool);
		$('#live-stats-themes').html(stats.themes);
		// Sidebar Stats
		$('#live-stats-monthly_price').html("$"+stats.monthly_price);
		$('#realtime-user_entry').html(stats.entry);
		$('#realtime-user_sites').html(stats.sites);
		$('#list-site_num').html(stats.sites);
	}

	// Updates sites list on menu-bar
	function updateSiteList(sites) {
		$("#site_list").empty()
		$.each(sites, function(i, site) {
			var li = $("<li><a href='#' data-site-id='"+ site.id +"'>"+ site.title +"</a></li>");
			$("#site_list").append(li);
		});
	}

	function postingWidget() {
		
	}

	// Updates all the necessary real-time charts
	function updateCharts(data) {
	}

});