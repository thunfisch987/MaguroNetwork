console.log("Hello from your Service Worker :P");
var cacheName = "rndmemes";
fetch("memes/").then(function (response) {
	console.log(response);
});
var filesToCache = [
	"/",
	"/index.html",
	"/assets/css/style.css",
	"//assets/js/randommemes.js",
	"/memes/",
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
