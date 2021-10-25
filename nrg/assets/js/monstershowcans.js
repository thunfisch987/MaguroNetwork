/*jshint esversion: 6 */
const classicdiv = document.getElementById("classicdiv");
const juiceddiv = document.getElementById("juiceddiv");
const ultradiv = document.getElementById("ultradiv");
const rehabdiv = document.getElementById("rehabdiv");

function hideall() {
	classicdiv.style.display = "none";
	juiceddiv.style.display = "none";
	ultradiv.style.display = "none";
	rehabdiv.style.display = "none";
}

function showcans(element) {
	switch (element.dataset.toggletype) {
		case "classic":
			hideall();
			if (classicdiv.style.display !== "block") {
				classicdiv.style.display = "block";
			}
			break;
		case "juiced":
			hideall();
			if (juiceddiv.style.display !== "block") {
				juiceddiv.style.display = "block";
			}
			break;
		case "ultra":
			hideall();
			if (ultradiv.style.display !== "block") {
				ultradiv.style.display = "block";
			}
			break;
		case "rehab":
			hideall();
			if (rehabdiv.style.display !== "block") {
				rehabdiv.style.display = "block";
			}
			break;
		default:
			console.log("error");
			break;
	}
}
