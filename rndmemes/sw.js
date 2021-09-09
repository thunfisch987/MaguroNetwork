/*jshint esversion: 6 */
console.log("Hello from your Service Worker :P");
const fs = require("fs");
memes = fs.readdir("memes/");
console.log(memes);
// var cacheName = "rndmemes";
// var fetchdata;
// var memecache = [];
// fetch("memes/")
// 	.then((text) => text.text())
// 	.then(function (html) {
// 		var parser = new DOMParser();
// 		var doc = parser.parseFromString(html, "text/html");
// 		var elems = doc.querySelectorAll("td > a");
// 		elems.forEach((a) => memecache.push(a.href));
// 		console.log(memecache);
// 	})
// 	.catch(function (err) {
// 		// There was an error
// 		console.warn("Something went wrong.", err);
// 	});
// {
// responsetext
// 	.find("td > a")
// 	.each((filename) => memecache.push(filename.attr("href")))
// 	.then(console.log)
// 	response.find("td > a").each(function (filename) {
// 		memecache.push(filename.attr("href"));
// 	});
// });

var filesToCache = [
	"/",
	"/index.html",
	"/assets/css/style.css",
	"/assets/js/randommemes.js",
];

/* Start the service worker and cache all of the app's content */
self.addEventListener("install", function (e) {
	e.waitUntil(
		caches.open(cacheName).then(function (cache) {
			return cache.addAll(filesToCache);
		})
	);
});

/* Serve cached content when offline */
self.addEventListener("fetch", function (e) {
	e.respondWith(
		caches.match(e.request).then(function (response) {
			return response || fetch(e.request);
		})
	);
});
