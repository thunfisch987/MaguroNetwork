/* jshint esversion: 11*/
// @ts-check
// console.log($(".nrgs"));
// $(".nrgs").each(function () {
// 	$(this).show("fade", 400);
// });

$(function () {
	$(".altnrgs").each(function (index) {
		$(this)
			.delay(400 * index)
			.show("fade");
	});
});
