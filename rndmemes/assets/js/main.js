/*jshint esversion: 6 */
window.onload = () => {
	"use strict";

	if ("serviceWorker" in navigator) {
		navigator.serviceWorker.register("./assets/js/sw.js");
	}
};
