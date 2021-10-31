/* jshint esversion: 11*/
// @ts-check
const effect_overview = $(".overview");

$("button").on("click", function (e) {
	e.stopPropagation();
	const div = $(`#${$(this).data("toggletype")}`);
	$(".nrgs").not(div).hide();
	const elems = div.find("img");
	if (div.is(":hidden")) {
		div.show(0, () => {
			elems.hide();
			effect_overview.hide("fade", 100);
			elems.each(function (index) {
				$(this)
					.delay(400 * index)
					.show("fade");
			});
		});
	} else if (div.is(":visible")) {
		let count = elems.length;
		elems.each(function (index) {
			$(this)
				.delay(400 * index)
				.hide("fade", () => {
					if (index === count - 1) {
						div.hide();
						effect_overview.show("fade");
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
