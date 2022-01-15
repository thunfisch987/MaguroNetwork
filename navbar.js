/*jshint esversion: 11 */
// @ts-check

// const origin = window.location.origin;
// const s = document.querySelector.bind(document);
// function sel(id) {
//   document.querySelector(id).classList.add("active")
//   document.querySelector(id).classList.add("disabled")
// }

// function navbar() {
//   origin == "https://littlebitgay.de" && sel("#lbg");

//   origin == "https://weeb.littlebitgay.de" && sel("#lbg")

//   origin == "https://nrg.littlebitgay.de" && sel("#lbg")

//   origin == "https://r4e.littlebitgay.de" && sel("#lbg")

//   origin == "https://veg.littlebitgay.de" && sel("#lbg")

//   origin == "https://rg.littlebitgay.de" && sel("#lbg")

//   origin == "https://rats.littlebitgay.de" && sel("#lbg")

//   origin == "http://127.0.0.1:62738/" && sel("#lbg")
// }

const sub_domain = window.location.origin.split(".")[0].split("//")[1];
$(`#${sub_domain}`).addClass("active").addClass("disabled");
