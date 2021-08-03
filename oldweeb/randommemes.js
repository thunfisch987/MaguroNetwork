/*jshint esversion: 6 */
var fileNames = [];
var age_elem = document.getElementById("age");
var meme_elem = document.getElementById("meme");
var btndiv_elem = document.getElementById("btndiv");
var downloadbutton = document.getElementById("downloadbutton");
const params = new URLSearchParams(location.search);
var file = "";

document.onkeyup = function (event) {
	if (event.key !== undefined) {
		if (event.key === "Enter") {
			randomImage();
		}
	}
};

$.ajax({
	url: "memes/",
	success: function (data) {
		$(data)
			.find("td > a")
			.each(function () {
				fileNames.push($(this).attr("href"));
			});
	},
	complete: function (data) {
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

function enter() {
	document.cookie =
		"ageverify=1; SameSite=Lax; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
	age_elem.style.setProperty("display", "none", "important");
	meme_elem.style.display = "block";
	btndiv_elem.style.display = "block";
}

if (document.cookie.indexOf("ageverify=1") != -1) {
	age_elem.style.setProperty("display", "none", "important");
	meme_elem.style.display = "block";
	btndiv_elem.style.display = "block";
} else {
	// jQuery("#cookieNotice").prependTo("body");
	// jQuery("#cookieNoticeCloser").show();
}

function exit() {
	window.location.href = "https://littlebitgay.de";
}

function displayImage(id) {
	file = "memes/" + fileNames[id];
	meme_elem.src = file;
	newurl = location.pathname + "?" + params;
	window.history.replaceState({}, "", newurl);
	downloadbutton.setAttribute("href", file);
}

function randomImage() {
	randomid = Math.floor(Math.random() * fileNames.length);
	displayImage(randomid);
	params.set("id", randomid);
}
