/*jshint esversion: 6 */

function showTime() {
	const date = new Date();
	const h = date.getHours(); // 0 - 23
	const m = date.getMinutes(); // 0 - 59
	const s = date.getSeconds(); // 0 - 59

	const time = `${h}:${m}:${s}`;
	document.getElementById("clock").innerText = time;
	document.getElementById("clock").textContent = time;

	setTimeout(showTime, 1000);
}
