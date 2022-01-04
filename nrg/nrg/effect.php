<!DOCTYPE html>
<html lang="en" style="background-color: black">

<head>
	<?php include "../nrghead.html"; ?>
</head>
<!--########### BODY ######################################################################################-->

<body>
	<!-- Age Verification -->
	<div class="
				d-flex
				flex-column
				min-vh-100
				justify-content-center
				text-center
				mx-5
			" id="age">
		<h3>Altersverifizierung</h3>
		<hr />
		<p>
			Diese Seite enthält auch Alkohol, für den Inhalt musst du
			mindestens 18 Jahre sein.
		</p>
		<div class="d-grid gap-1" id="">
			<button class="btn btn-success" onclick="enter()">
				Ja, bin ich.
			</button>
			<button class="btn btn-danger" onclick="exit()">
				Nein, zurück zur Startseite.
			</button>
		</div>
	</div>

	<div id="cookieNotice" class="container-fluid bg-info text-center p-1">
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
	<div id="bodygrid" class="container-fluid hide" style="background-color: black">
		<!--Greeting-->
		<div class="row">
			<div class="col text-center text-white">
				<p class="lead" id="greeting">Good Day!</p>
			</div>
		</div>
		<div class="row">
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-success energys" data-toggletype="classic">
					effect CLASSIC
					<img class="overview" src="../assets/img/effect/CLASSIC/overview.webp" alt="" />
				</button>
			</div>
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-danger energys" data-toggletype="flavoured">
					effect FLAVOURED
					<img class="overview" src="../assets/img/effect/FLAVOURED/overview.webp" alt="" />
				</button>
			</div>
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-warning energys" data-toggletype="bcaa">
					effect BCAA
					<img class="overview" src="../assets/img/effect/BCAA/overview.webp" alt="" />
				</button>
			</div>
			<div class="col text-center text-white d-grid">
				<button type="button" class="btn btn-info energys" data-toggletype="mix">
					effect MIX
					<img class="overview" src="../assets/img/effect/MIX/overview.webp" alt="" />
				</button>
			</div>
		</div>
		<div id="classic" class="mt-2 nrgs">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/effect/CLASSIC/overview_cans.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/effect/CLASSIC/classic_025l.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/effect/CLASSIC/zero_033l.webp" alt="" />
				</div>
			</div>
		</div>
		<div id="flavoured" class="mt-2 nrgs">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/effect/FLAVOURED/shock.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/effect/FLAVOURED/pushd.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/effect/FLAVOURED/pushd_zero.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/effect/FLAVOURED/voltage.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/effect/FLAVOURED/massive_guava.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/effect/FLAVOURED/black_acai.webp" alt="" />
				</div>
			</div>
		</div>
		<div id="bcaa" class="mt-2 nrgs">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/effect/BCAA/superberry.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/effect/BCAA/xplode_tropical_blast.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/effect/BCAA/shredded_cola_crush.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/effect/BCAA/ripped_pear_boost.webp" alt="" />
				</div>
			</div>
		</div>
		<div id="mix" class="mt-2 nrgs">
			<div class="row">
				<div class="col text-center text-white">
					<img src="../assets/img/effect/MIX/guava.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/effect/MIX/acai.webp" alt="" />
				</div>
				<div class="col text-center text-white">
					<img src="../assets/img/effect/MIX/classic.webp" alt="" />
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
	<script type="text/javascript">
		var hide_elem = $(".hide").hide();
		var age_elem = $("#age");

		function enter() {
			document.cookie =
				"ageverify=1; SameSite=Lax; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
			age_elem.remove();
			hide_elem.show();
			console.log("yeet");
		}

		if (document.cookie.indexOf("ageverify=1") != -1) {
			age_elem.remove();
			hide_elem.show();
		} else {
			// jQuery("#cookieNotice").prependTo("body");
			// jQuery("#cookieNoticeCloser").show();
		}

		function exit() {
			window.location.href = "https://nrg.littlebitgay.de";
		}
	</script>
	<script type="text/javascript" src="https://cdn.phnx.xyz/maguro/js/sticky.js" charset="utf-8"></script>
	<script type="text/javascript" src="https://cdn.phnx.xyz/maguro/js/clock.js" charset="utf-8"></script>
	<script type="text/javascript" src="https://cdn.phnx.xyz/maguro/js/navbar.js" charset="utf-8"></script>
	<script type="text/javascript" src="../assets/js/showcans.js" charset="utf-8"></script>
</body>

</html>