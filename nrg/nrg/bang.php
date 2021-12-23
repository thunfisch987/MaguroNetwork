<!DOCTYPE html>
<html lang="en" style="background-color: black">

<head>
	<?php include "../nrghead.html" ?>
</head>
<!--########### BODY ######################################################################################-->

<body>
	<div class="container-fluid bg-info text-center p-1" id="cookieNotice">
		<span>This website uses cookies Here's one for you!</span>
		<span id="cookieNoticeCloser" onclick="setcookie()">[x]</span>
	</div>

	<!--Header-->
	<!-- <div class="bg-dark p-3 text-center" id="header">
			<div class="container-fluid" id="headerdiv">
				<h1 class="display-1" id="headertext">Energys4Life</h1>
			</div>
		</div> -->

	<div id="nav-placeholder"></div>

	<!--....BODY GRID....-->
	<div class="container-fluid" style="background-color: black">
		<!--Greeting-->
		<div class="row">
			<div class="col text-center text-white">
				<p class="lead" id="greeting">Good Day!</p>
			</div>
		</div>
		<div class="row">
			<div class="col text-center text-white mt-2">
				<img class="altnrgs" src="../assets/img/bang/candy-apple-crisp.webp" />
			</div>
			<div class="col text-center text-white mt-2">
				<img class="altnrgs" src="../assets/img/bang/peach-mango.webp" />
			</div>
			<div class="col text-center text-white mt-2">
				<img class="altnrgs" src="../assets/img/bang/lemon-drop.webp" />
			</div>
			<div class="col text-center text-white mt-2">
				<img class="altnrgs" src="../assets/img/bang/black-cherry-vanilla.webp" />
			</div>
			<div class="col text-center text-white mt-2">
				<img class="altnrgs" src="../assets/img/bang/blue-razz.webp" />
			</div>
			<div class="col text-center text-white mt-2">
				<img class="altnrgs" src="../assets/img/bang/rainbow-unicorn.webp" />
			</div>
		</div>
	</div>
	<!--<div class="container" style="height: 5000px;">

		</div>-->

	<div id="footer-placeholder"></div>

	<script type="text/javascript" src="https://cdn.phnx.xyz/maguro/js/tooltiplistener.js" charset="utf-8"></script>
	<script type="text/javascript" src="https://cdn.phnx.xyz/maguro/js/cookie.js" charset="utf-8"></script>
	<script type="text/javascript" src="https://cdn.phnx.xyz/maguro/js/greeting.js" charset="utf-8"></script>
	<script>
		$.support.cors = true;
		$.get(
			"https://cdn.phnx.xyz/maguro/nrgnavbar.html",
			function(data) {
				$("#nav-placeholder").replaceWith(data);
				navbar();
				sticky();
				showTime();
			}
		);
		$.get(
			"https://cdn.phnx.xyz/maguro/nrgfooter.html",
			function(data) {
				$("#footer-placeholder").replaceWith(data);
				tooltiplistener();
			}
		);
	</script>
	<script type="text/javascript" src="https://cdn.phnx.xyz/maguro/js/sticky.js" charset="utf-8"></script>
	<script type="text/javascript" src="https://cdn.phnx.xyz/maguro/js/clock.js" charset="utf-8"></script>
	<script type="text/javascript" src="https://cdn.phnx.xyz/maguro/js/navbar.js" charset="utf-8"></script>
	<script type="text/javascript" src="../assets/js/showcans_alt.js" charset="utf-8"></script>
</body>

</html>