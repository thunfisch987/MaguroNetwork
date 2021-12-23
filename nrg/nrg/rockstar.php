<!DOCTYPE html>
<html lang="en" style="background-color: black">

<head>
	<?php include "nrghead.html" ?>
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
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-secondary energys" data-toggletype="classic">
					Rockstar Classic
				</button>
			</div>
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-warning energys" data-toggletype="hemp">
					Rockstar Hemp
				</button>
			</div>
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-warning energys" data-toggletype="punched">
					Rockstar Punched
				</button>
			</div>
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-info energys" data-toggletype="xdurance">
					Rockstar XDurance
				</button>
			</div>
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-info energys" data-toggletype="xdpower">
					Rockstar XDPower
				</button>
			</div>
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-info energys" data-toggletype="juiced">
					Rockstar Juiced
				</button>
			</div>
		</div>
		<div id="classic" class="mt-2 nrgs">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/rockstar/Rockstar/original.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/rockstar/Rockstar/original_no_sugar.webp" alt="" />
				</div>
			</div>
		</div>
		<div id="hemp" class="mt-2 nrgs">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/rockstar/Energy+Hemp/original.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/rockstar/Energy+Hemp/prickly_cactus.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/rockstar/Energy+Hemp/tropical_burst.webp" alt="" />
				</div>
			</div>
		</div>
		<div id="punched" class="mt-2 nrgs">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/rockstar/Punched/tropical_guava.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/rockstar/Punched/sour_apple.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/rockstar/Punched/sour_raspberry.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/rockstar/Punched/pineapple_coconut_freeze.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/rockstar/Punched/watermelon_freeze.webp" alt="" />
				</div>
			</div>
		</div>
		<div id="xdurance" class="mt-2 nrgs">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/rockstar/XDurance/blueberry_pomegranate_acai.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/rockstar/XDurance/grape.webp" alt="" />
				</div>
			</div>
		</div>
		<div id="xdpower" class="mt-2 nrgs">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/rockstar/XDPower/original.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/rockstar/XDPower/waldmeister_boost.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/rockstar/XDPower/berry_blast.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/rockstar/XDPower/hardcore_apple.webp" alt="" />
				</div>
			</div>
		</div>
		<div id="juiced" class="mt-2 nrgs">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/rockstar/Juiced/tropical_orange_passion_fruit.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/rockstar/Juiced/machu_peachu.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/rockstar/Juiced/el_mango.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/rockstar/Juiced/passion_frutas.webp" alt="" />
				</div>
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
	<script type="text/javascript" src="../assets/js/showcans.js" charset="utf-8"></script>
</body>

</html>