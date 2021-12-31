<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "../nrghead.html"; ?>
</head>

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
	<div id="bodygrid" class="container-fluid">
		<!--Greeting-->
		<div class="row">
			<div class="col text-center text-white">
				<p class="lead" id="greeting">Good Day!</p>
			</div>
		</div>
		<div class="row">
			<div class="col text-center text-white"></div>
		</div>
		<div class="row">
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-success energys" data-toggletype="classic">
					Monster Classic
				</button>
			</div>
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-danger energys" data-toggletype="juiced">
					Monster Juiced
				</button>
			</div>
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-warning energys" data-toggletype="ultra">
					Monster Ultra
				</button>
			</div>
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-info energys" data-toggletype="rehab">
					Monster Rehab
				</button>
			</div>
		</div>
		<div id="classic" class="mt-2 nrgs">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/monster/Monster/monster_original.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/monster/Monster/monster_nitro.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/monster/Monster/monster_mule.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/monster/Monster/monster_zero.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/monster/Monster/monster_doctor.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/monster/Monster/monster_assault.webp" alt="" />
				</div>
			</div>
		</div>
		<div id="juiced" class="mt-2 nrgs">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/monster/Juiced/punch_mixxd.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/monster/Juiced/punch_mangoloco.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/monster/Juiced/juiced_pipeline-punch.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/monster/Juiced/punch_pacific-punch.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/monster/Juiced/juiced_monarch.webp" alt="" />
				</div>
			</div>
		</div>
		<div id="ultra" class="mt-2 nrgs">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/monster/Ultra/ultra_watermelon.webp" alt="">
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/monster/Ultra/ultra_fiesta.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/monster/Ultra/ultra_white.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/monster/Ultra/ultra_citron.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/monster/Ultra/ultra_violet.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/monster/Ultra/ultra_paradise.webp" alt="" />
				</div>
			</div>
		</div>
		<div id="rehab" class="mt-2 nrgs">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/monster/Rehab/rehab_lemonade.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/monster/Rehab/rehab_peach.webp" alt="" />
				</div>
			</div>
		</div>
	</div>
	<!--<div class="container" style="height: 5000px;">

		</div>-->

	<div id="footer-placeholder"></div>

	<script type="text/javascript" src="https://cdn.phnx.xyz/maguro/js/tooltiplistener.js" charset="utf-8" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.phnx.xyz/maguro/js/cookie.js" charset="utf-8" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.phnx.xyz/maguro/js/greeting.js" charset="utf-8" crossorigin="anonymous"></script>
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
	<script type="text/javascript" src="https://cdn.phnx.xyz/maguro/js/sticky.js" charset="utf-8" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.phnx.xyz/maguro/js/clock.js" charset="utf-8" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.phnx.xyz/maguro/js/navbar.js" charset="utf-8" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../assets/js/showcans.js" charset="utf-8"></script>
</body>

</html>