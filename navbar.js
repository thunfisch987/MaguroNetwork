var origin = window.location.origin
var s = document.querySelector.bind(document)
function sel(id) {
  document.querySelector(id).classList.add("active")
  document.querySelector(id).classList.add("disabled")
}

function navbar() {
  origin == "https://littlebitgay.de" && sel("#lbg")

  origin == "https://weeb.littlebitgay.de" && sel("#lbg")

  origin == "https://nrg.littlebitgay.de" && sel("#lbg")

  origin == "https://r4e.littlebitgay.de" && sel("#lbg")

  origin == "https://veg.littlebitgay.de" && sel("#lbg")

  origin == "https://rg.littlebitgay.de" && sel("#lbg")

  origin == "https://rats.littlebitgay.de" && sel("#lbg")

  origin == "http://127.0.0.1:62738/" && sel("#lbg")
};
