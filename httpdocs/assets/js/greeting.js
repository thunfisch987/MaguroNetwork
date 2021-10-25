/*jshint esversion: 6 */
window.onload = (() => {
	changegreeting();
})();

function changegreeting() {
	const now = new Date();
	const hour = now.getHours();
	if (hour >= 5 && hour <= 12) {
		document.getElementById("greeting").textContent = "Good Morning!";
	} else if (hour >= 12 && hour <= 17) {
		document.getElementById("greeting").textContent = "Good Afternoon!";
	} else if (hour >= 17 && hour <= 22) {
		document.getElementById("greeting").textContent = "Good Evening!";
	} else if ((hour >= 0 && hour <= 5) || hour == 23) {
		document.getElementById("greeting").textContent = "Good Night!";
	}
}
