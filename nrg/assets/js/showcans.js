/* jshint esversion: 11*/
$("button").on("click", function (e) {
	e.stopPropagation();
	var div = $(`#${$(this).data("toggletype")}`);
	var alldivs = $(".nrgs").not(div).hide();
	alldivs.not(div).hide();
	if (div.is(":hidden")) {
		div.show(0, function () {
			fadethemIN($(this).find("img").hide());
		});
	} else if (div.is(":visible")) {
		fadingOUT(div.find("img"), div);
		// $(div).hide(0);
	}
});

function fadethemIN(elems) {
	// elems.eq(0).fadeIn(300, function () {
	// 	fadethemIN(elems.slice(1));
	// });
	elems.each(function (index) {
		$(this)
			.delay(400 * index)
			.fadeIn(300);
	});
}

function fadingOUT(elems, div) {
	fadethemOUT(elems, function () {
		div.hide();
	});
}

function fadethemOUT(elems, callback) {
	// elems.eq(0).fadeOut(300, function () {
	// 	console.log(elems);
	// 	fadethemOUT(elems.slice(1));
	// });
	elems.each(function (index) {
		$(this)
			.delay(400 * index)
			.fadeOut(300);
	});
	callback();
}
