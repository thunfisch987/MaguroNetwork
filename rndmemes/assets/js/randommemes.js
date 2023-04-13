/*jshint esversion: 6 */
const fileNames = [];
const age_elem = document.getElementById("age");
const meme_elem = document.getElementById("meme");
const btndiv_elem = document.getElementById("btndiv");
const downloadbutton = document.getElementById("downloadbutton");
const params = new URLSearchParams(location.search);
const enterbutton = document.querySelector("div.age button.btn-success");
const exitbutton = document.querySelector("div.age button.btn-danger");
let file = "";
const hidebutton = document.getElementById("hide").classList;
const randombutton = document.getElementById("randombutton");

document.onkeyup = (event) => {
	if (event.key !== undefined && event.key === "Enter") {
		randomImage();
	}
};

$.ajax({
	url: "memes/",
	success(data) {
		console.log(typeof data);
		$(data)
			.find("td > a")
			.each(function () {
				fileNames.push($(this).attr("href"));
			});
	},
	complete() {
		fileNames.shift();
		if (params.has("id")) {
			displayImage(params.get("id"));
		} else {
			randomImage();
		}
		//randomImage();
	},
});

$("#downloadbutton").attr({
	target: "_blank",
	href: meme_elem.src,
});

function escapeHtml(text) {
	const map = {
		"&": "&amp;",
		"<": "&lt;",
		">": "&gt;",
		'"': "&quot;",
		"'": "&#039;",
	};

	return text.replace(/[&<>"']/g, (m) => map[m]);
}


function enter() {
	document.cookie =
		"ageverify=1; SameSite=Lax; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
	age_elem.style.setProperty("display", "none", "important");
	meme_elem.style.display = "block";
	btndiv_elem.style.display = "block";
}
enterbutton.addEventListener("click", enter);

if (document.cookie.indexOf("ageverify=1") != -1) {
	age_elem.style.setProperty("display", "none", "important");
	meme_elem.style.display = "block";
	btndiv_elem.style.display = "block";
}

function exit() {
	window.location.href = "https://littlebitgay.de";
}
exitbutton.addEventListener("click", exit);

function displayImage(id) {
	file = `memes/${fileNames[id]}`;
	meme_elem.src = file;
	newurl = `${location.pathname}?${params}`;
	window.history.replaceState({}, "", newurl);
	downloadbutton.setAttribute("href", escapeHtml(file));
}

function randomImage() {
	randomid = Math.floor(Math.random() * fileNames.length);
	displayImage(randomid);
	params.set("id", randomid);
}
randombutton.addEventListener("click", randomImage);

function togglehide() {
	const uploadbutton = document.getElementById("upload");
	const downloadbutton = document.getElementById("downloadbutton");
	const randombutton = document.getElementById("randombutton");
	if (hidebutton.contains("bi-eye-fill")) {
		hidebutton.replace("bi-eye-fill", "bi-eye-slash-fill");
		uploadbutton.hidden = true;
		downloadbutton.hidden = true;
		randombutton.hidden = true;
	} else if (hidebutton.contains("bi-eye-slash-fill")) {
		hidebutton.replace("bi-eye-slash-fill", "bi-eye-fill");
		uploadbutton.hidden = false;
		downloadbutton.hidden = false;
		randombutton.hidden = false;
	} else {
		console.log("Error");
	}
}
