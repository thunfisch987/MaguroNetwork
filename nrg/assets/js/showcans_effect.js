/* jshint esversion: 11*/
// @ts-check
const effect_overview = $(".overview");

$("button").on("click", function (e) {
	const yeet = $(this);
	yeet.prop("disabled", true);
	// $(this).off().off();
	e.stopPropagation();
	const div = $(`#${$(this).data("toggletype")}`);
	$(".nrgs").not(div).hide();
	const elems = div.find("img");
	const count = elems.length - 1;
	console.log(`yett ${count}`);
	if (div.is(":hidden")) {
		div.show(0, () => {
			elems.hide();
			effect_overview.hide("fade", 100);
			elems.each(function (index) {
				$(this)
					.delay(400 * index)
					.show("fade", () => {
						if (index === count) {
							yeet.prop("disabled", false);
							console.log("finished");
						}
					});
			});
		});
	} else if (div.is(":visible")) {
		elems.each(function (index) {
			$(this)
				.delay(400 * index)
				.hide("fade", () => {
					if (index === count - 1) {
						div.hide();
						effect_overview.show("fade");
						yeet.prop("disabled", false);
					}
				});
		});
	}
});

function fadethemIN(elems) {
	elems.each(function (index) {
		$(this)
			.delay(400 * index)
			.show("fade");
	});
}
