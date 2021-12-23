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
				<button type="button" class="btn btn-primary energys" data-toggletype="black_cat">
					Black Cat
				</button>
			</div>
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-secondary energys" data-toggletype="booster">
					Booster
				</button>
			</div>
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-success energys" data-toggletype="bullit">
					Bullit
				</button>
			</div>
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-danger energys" data-toggletype="burn">
					burn
				</button>
			</div>
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-warning energys" data-toggletype="cola">
					Cola Energy
				</button>
			</div>
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-info energys" data-toggletype="crazy_wolf">
					Crazy Wolf
				</button>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-primary energys" data-toggletype="engie">
					engie
				</button>
			</div>
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-secondary energys" data-toggletype="aldi">
					Flying Power / Strong Force
				</button>
			</div>
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-success energys" data-toggletype="kong_strong">
					Kong Strong
				</button>
			</div>
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-danger energys" data-toggletype="power_horse">
					Power Horse
				</button>
			</div>
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-warning energys" data-toggletype="relentless">
					Relentless
				</button>
			</div>
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-info energys" data-toggletype="spezi">
					Spezi Energy
				</button>
			</div>
		</div>
		<div class="mt-2 nrgs" id="aldi">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/others/aldi/" alt="" />
				</div>
			</div>
		</div>
		<div class="mt-2 nrgs" id="black_cat">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/others/black_cat/can.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/others/black_cat/sixpack.webp" alt="" />
				</div>
			</div>
		</div>
		<div class="mt-2 nrgs" id="booster">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/others/booster/absolute_zero.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/others/booster/bottle.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/others/booster/classic.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/others/booster/exotic.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/others/booster/juicy.webp" alt="" />
				</div>
			</div>
		</div>
		<div class="mt-2 nrgs" id="bullit">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/others/bullit/" alt="" />
				</div>
			</div>
		</div>
		<div class="mt-2 nrgs" id="burn">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/others/burn/" alt="" />
				</div>
			</div>
		</div>
		<div class="mt-2 nrgs" id="cola">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/others/cola/" alt="" />
				</div>
			</div>
		</div>
		<div class="mt-2 nrgs" id="crazy_wolf">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/others/crazy_wolf/" alt="" />
				</div>
			</div>
		</div>
		<div class="mt-2 nrgs" id="engie">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/others/engie/" alt="" />
				</div>
			</div>
		</div>
		<div class="mt-2 nrgs" id="kong_strong">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/others/kong_strong/" alt="" />
				</div>
			</div>
		</div>
		<div class="mt-2 nrgs" id="power_horse">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/others/power_horse/" alt="" />
				</div>
			</div>
		</div>
		<div class="mt-2 nrgs" id="relentless">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/others/relentless/" alt="" />
				</div>
			</div>
		</div>
		<div class="mt-2 nrgs" id="spezi">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/others/spezi/" alt="" />
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