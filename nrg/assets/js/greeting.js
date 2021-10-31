/*jshint esversion: 11 */
// @ts-check

window.onload = (() => {
	changegreeting();
})();

function changegreeting() {
	const now = new Date();
	const hour = now.getHours();
	if (hour >= 5 && hour <= 12) {
		document.getElementById("greeting").textContent = "Guten Morgen!";
	} else if (hour >= 12 && hour <= 17) {
		document.getElementById("greeting").textContent = "Guten Tag!";
	} else if (hour >= 17 && hour <= 22) {
		document.getElementById("greeting").textContent = "Guten Abend!";
	} else if ((hour >= 0 && hour <= 5) || hour == 23) {
		document.getElementById("greeting").textContent = "Gute Nacht!";
	}
}
