<!DOCTYPE html>
<?php
	$theHtmlToParse = file_get_contents("https://www.animexx.de/events");
	function debug_to_console($data) {
		$output = $data;
		if (is_array($output))
			$output = implode(',', $output);
	
		echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
	}
	error_log($theHtmlToParse)
?>
<html lang="en">

<head>
	<?php include "nrghead.html" ?>
</head>
<!--########### BODY ######################################################################################-->

<body>
	<div class="container-fluid bg-info text-center p-1" id="cookieNotice">
		<span>This website uses cookies, Here's one for you!</span>
		<span id="cookieNoticeCloser" onclick="setcookie()">[x]</span>
	</div>

	<!--Header-->
	<div class="bg-dark p-3 text-center" id="header">
		<div class="container-fluid" id="headerdiv">
			<h1 class="display-1" id="headertext">Energys4Life</h1>
		</div>
	</div>

	<div id="nav-placeholder"></div>

	<!--BODY GRID-->
	<div id="bodygrid" class="container-fluid">
		<div class="row">
			<div class="col text-center text-white">
				<p class="lead" id="greeting">Good Day!</p>
			</div>
		</div>
		<div class="row">
			<div class="col tex-center text-white">
				<p>
					Diese Website (nrg.littlebitgay.de) ist nur eine
					Fan-Website, alle Bilder gehören den jeweiligen Firmen.
				</p>
				<p></p>
				<p></p>
				<p><strong>Impressum</strong></p>
				<p>Anbieter:<br />thunfisch987</p>
				<p>
					Kontakt:<br />
					E-Mail: thunfisch987@gmail.com<br />
					Website: littlebitgay.de
				</p>
				<br /><br /><br /><br />
				<p><em>In Loving Memory of Majumafa</em></p>
			</div>
		</div>
	</div>
	<div id="animexx-placeholder"></div>
	<!--<div class="container" style="height: 5000px;">

		</div>-->

	<div id="footer-placeholder"></div>
	<script type="text/javascript" charset="utf-8" src="https://cdn.phnx.xyz/maguro/js/tooltiplistener.js" integrity="sha384-b7eAsGAAFV8YjomqM5XS3mo/6ZS+G4+cPN0+GStZEhfVmz0lPV3ou1xcU0hIc4Gb" crossorigin="anonymous"></script>
	<script type="text/javascript" charset="utf-8" src="https://cdn.phnx.xyz/maguro/js/cookie.js" integrity="sha384-+f3Uto0elnYMcU2sPdeambA4SotDom2xiC/ctuTThoBs2RzpfGOLzrcYFkBQ3aBK sha384-BpCIDUCgafWZW3FJUfx0pg0k7Pf3w+3OXmI1WnikEQL38xw62QUwnHQuAjffSGWS" crossorigin="anonymous"></script>
	<script type="text/javascript" charset="utf-8" src="https://cdn.phnx.xyz/maguro/js/greeting.js" integrity="sha384-jme/q6jDe04bTFGFXVEML6uSdRilomYY7Wh/JjeaGszh89yz3pc3ndYDxnvVaXi9 sha384-16xSCYyrqfBFkgoEB96ljSpEBqslFAWbgOKE6W/MVP/doMIL/mbGlEyDr6gVapxg" crossorigin="anonymous"></script>
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
	<script type="text/javascript" charset="utf-8" src="https://cdn.phnx.xyz/maguro/js/sticky.js" integrity="sha384-f/GhT1ipnwhv/n7YU7Z6s131fAPYad2TBc+jf2cpyVDhVqJ9sGKdBoe5j30dZCfN sha384-m0x3/MjcGAPsynWm3pI6yGoHyAPuLpiojQCjsNTdvehrwJcOBcsXWJXaFQn3llfL" crossorigin="anonymous"></script>
	<script type="text/javascript" charset="utf-8" src="https://cdn.phnx.xyz/maguro/js/clock.js" integrity="sha384-lEB0SNSXpj5qx7J509UMHFKh59ggSB8zLH6UcrgbQPgR8PIi/MlPgTvVs5vMIR8j sha384-iqkO4SArqyLNVPiyelbPldvP1AxCQOQTe2TukFLJMdyNEbyHC/yOrytijaosvuMT" crossorigin="anonymous"></script>
	<script type="text/javascript" charset="utf-8" src="https://cdn.phnx.xyz/maguro/js/navbar.js" integrity="sha384-qnActJEtweGF+uaLO1RerGRWbAyBWrbLONQ2R6/6xYZYAL4f8LxZGOi+u0BxNrPe sha384-8c60xfh/zqTjR4ZYDWx1BInvvZ9k3/i7sPOvhpcd3d+04qdhlpZg1XgtX90E91FO" crossorigin="anonymous"></script>
</body>

</html>