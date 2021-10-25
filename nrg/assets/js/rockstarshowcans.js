/*jshint esversion: 6 */
const classicdiv = $("classicdiv");
console.log(classicdiv);

const hempdiv = $("hempdiv");
const puncheddiv = $("puncheddiv");
const xdurancediv = $("xdurancediv");
const xdpowerdiv = $("xdpowerdiv");
const juiceddiv = $("juiceddiv");

function hideall() {
	classicdiv.toggleClass("fadingOut");
	classicdiv.one(
		"webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
		function (e) {
			$("#msg").append("<p>Transition complete</p>");
		}
	);
	classicdiv.css("display", "none");
	hempdiv.css("display", "none");
	puncheddiv.css("display", "none");
	xdurancediv.css("display", "none");
	xdpowerdiv.css("display", "none");
	juiceddiv.css("display", "none");
}

function showcans(element) {
	switch (element.dataset.toggletype) {
		case "classic":
			if (classicdiv.css("display") === "block") {
				hideall();
				break;
			}
			hideall();
			classicdiv.css("display", "block");
			break;
		case "hemp":
			if (hempdiv.css("display") === "block") {
				hideall();
				break;
			}
			hideall();
			hempdiv.css("display", "block");
			break;
		case "punched":
			if (puncheddiv.css("display") === "block") {
				hideall();
				break;
			}
			hideall();
			puncheddiv.css("display", "block");
			break;
		case "xdurance":
			if (xdurancediv.css("display") === "block") {
				hideall();
				break;
			}
			hideall();
			xdurancediv.css("display", "block");
			break;
		case "xdpower":
			if (xdpowerdiv.css("display") === "block") {
				hideall();
				break;
			}
			hideall();
			xdpowerdiv.css("display", "block");
			break;
		case "juiced":
			if (juiceddiv.css("display") === "block") {
				hideall();
				break;
			}
			hideall();
			juiceddiv.css("display", "block");
			break;
		default:
			console.log("error");
			break;
	}
}
