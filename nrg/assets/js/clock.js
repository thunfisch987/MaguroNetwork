/*jshint esversion: 11 */
// @ts-check

function showTime() {
	const date = new Date();
	let h = date.getHours(); // 0 - 23
	let m = date.getMinutes(); // 0 - 59
	let s = date.getSeconds(); // 0 - 59

	h = (h < 10) ? `0${h}` : h;
    m = (m < 10) ? `0${m}` : m;
    s = (s < 10) ? `0${s}` : s;

	const time = `${h}:${m}:${s}`;
	document.getElementById("clock").innerText = time;
	document.getElementById("clock").textContent = time;

	setTimeout(showTime, 1000);
}
