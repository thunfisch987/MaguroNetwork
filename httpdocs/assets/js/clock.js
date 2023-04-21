/*jshint esversion: 6 */

var loaded = false;

self.onmessage = (message) => {
	loaded = message.data;
	console.log(message.data)
	if (loaded) {
		calcTime();
	}
};

function calcTime() {
    const date = new Date();
    const h = date.getHours(); // 0 - 23
    const m = date.getMinutes(); // 0 - 59
    const s = date.getSeconds(); // 0 - 59
    const time = `${h}:${m}:${s}`;
    self.postMessage(time);

    setTimeout(showTime, 1000);
}
