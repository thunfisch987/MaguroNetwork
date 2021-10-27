/*jshint esversion: 11 */
const classicdiv = $("#classicdiv");
const classicimgs = classicdiv.add("img").hide();
const hempdiv = $("#hempdiv");
const puncheddiv = $("#puncheddiv");
const xdurancediv = $("#xdurancediv");
const xdpowerdiv = $("#xdpowerdiv");
const juiceddiv = $("#juiceddiv");

function sleep(ms) {
	return new Promise((resolve) => setTimeout(resolve, ms));
}

function shownrgs(elem) {
	console.log("block");
	classicdiv.css("display", "block");
	fadeelemIn(classicimgs);
}

function fadeelemIn(elems) {
	console.log("elems");
	console.log(elems);
	elems.eq(0).fadeIn("slow", function () {
		console.log("fadeIn");
		console.log($(this));
		fadeelemIn(elems.slice(1)); // slice off the first element
	});

	// div.removeClass("fadingOut");
	// div.addClass("fadingIn");
	// classicimgs.each(function () {
	// 	console.log($(this));
	// 	console.log($(this).prev().prop("nodeName"));
	// 	$(this).addClass("imgFadingIn");
	// 	$(this).css("visibility", "visible");
	// });
}

function fadeOut(div) {
	switch (div.css("display")) {
		case "block":
			// div.removeClass("fadingIn");
			// div.addClass("fadingOut");
			div.one("animationend", () => {
				console.log("animation end");
				div.css("display", "none");
			});
			break;
		case "none":
			div.css("display", "none");
			break;
		default:
			console.error("error");
			break;
	}
}

function hideall() {
	fadeOut(classicdiv);
	fadeOut(hempdiv);
	fadeOut(puncheddiv);
	fadeOut(xdurancediv);
	fadeOut(xdpowerdiv);
	fadeOut(juiceddiv);
}

function showcans(element) {
	switch (element.dataset.toggletype) {
		case "classic":
			if (classicdiv.css("display") === "block") {
				// hideall();
				break;
			}
			// hideall();
			shownrgs(classicimgs);
			break;
		case "hemp":
			if (hempdiv.css("display") === "block") {
				hideall();
				break;
			}
			hideall();
			fadeIn(hempdiv);
			break;
		case "punched":
			if (puncheddiv.css("display") === "block") {
				hideall();
				break;
			}
			hideall();
			fadeIn(puncheddiv);
			break;
		case "xdurance":
			if (xdurancediv.css("display") === "block") {
				hideall();
				break;
			}
			hideall();
			fadeIn(xdurancediv);
			break;
		case "xdpower":
			if (xdpowerdiv.css("display") === "block") {
				hideall();
				break;
			}
			hideall();
			fadeIn(xdpowerdiv);
			break;
		case "juiced":
			if (juiceddiv.css("display") === "block") {
				hideall();
				break;
			}
			hideall();
			fadeIn(juiceddiv);
			break;
		default:
			console.error("error");
			break;
	}
}
