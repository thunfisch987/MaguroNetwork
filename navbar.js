var origin = window.location.origin

$(document).ready(function() {
  if (origin == "https://littlebitgay.de") {
    document.querySelector("#lbg").classList.add("active")
    document.querySelector("#lbg").classList.add("disabled")
  }

  if (origin == "https://weeb.littlebitgay.de") {
    document.querySelector("#weeb").classList.add("active")
    document.querySelector("#weeb").classList.add("disabled")
  }

  if (origin == "https://nrg.littlebitgay.de") {
    document.querySelector("#nrg").classList.add("active")
    document.querySelector("#nrg").classList.add("disabled")
  }

  if (origin == "https://r4e.littlebitgay.de") {
    document.querySelector("#r4e").classList.add("active")
    document.querySelector("#r4e").classList.add("disabled")
  }

  if (origin == "https://veg.littlebitgay.de") {
    document.querySelector("#veg").classList.add("active")
    document.querySelector("#veg").classList.add("disabled")
  }

  if (origin == "https://rg.littlebitgay.de") {
    document.querySelector("#rg").classList.add("active")
    document.querySelector("#rg").classList.add("disabled")
  }

  if (origin == "https://rats.littlebitgay.de") {
    document.querySelector("#rats").classList.add("active")
    document.querySelector("#rats").classList.add("disabled")
  }

  if (origin == "http://127.0.0.1:3000") {
    document.querySelector("#lbg").classList.add("active")
    document.querySelector("#lbg").classList.add("disabled")
  }
});
