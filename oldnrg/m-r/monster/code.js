/*jshint esversion: 6 */
//Buttons
const x = document.getElementById("energy");
const y = document.getElementById("rehab");
const z = document.getElementById("ultra");
const a = document.getElementById("extra");

function Energy() {
	if (x.style.display === "block") {
		x.style.display = "none";
	} else {
		x.style.display = "block";
		y.style.display = "none";
		z.style.display = "none";
		a.style.display = "none";
	}
}

function Rehab() {
	if (y.style.display === "block") {
		y.style.display = "none";
	} else {
		y.style.display = "block";
		x.style.display = "none";
		z.style.display = "none";
		a.style.display = "none";
	}
}

function Ultra() {
	if (z.style.display === "block") {
		z.style.display = "none";
	} else {
		z.style.display = "block";
		x.style.display = "none";
		y.style.display = "none";
		a.style.display = "none";
	}
}

function Extra() {
	if (a.style.display === "block") {
		a.style.display = "none";
	} else {
		a.style.display = "block";
		x.style.display = "none";
		y.style.display = "none";
		z.style.display = "none";
	}
}

//Links

function hideandshow(x) {
	document.getElementById("id01").style.display = "block";
	for (i = 1; i < 16; i++) {
		document.getElementById(`ID${i}`).style.display = "none";
	}
	document.getElementById(`ID${x}`).style.display = "block";
}
