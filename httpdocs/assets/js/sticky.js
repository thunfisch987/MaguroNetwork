/*jshint esversion: 6 */
// get the sticky element
/*const stickyElm = document.getElementById('navigationbar')
const magnet = document.getElementById('magnet')

const observer = new IntersectionObserver(
  ([e]) => e.target.classList.toggle('isSticky', e.intersectionRatio < 1),
  {threshold: [1]};
  magnet.toggle("isSticky", stickyElm.intersectionRatio < 1), {treshold: [1]};
);

observer.observe(stickyElm)*/

function sticky() {
	const observer = new IntersectionObserver(
		(entries) => {
			// no intersection with screen
			if (entries[0].intersectionRatio === 0)
				document.querySelector("#magnet").classList.add("isSticky");
			// fully intersects with screen
			else if (entries[0].intersectionRatio === 1)
				document.querySelector("#magnet").classList.remove("isSticky");
		},
		{ threshold: [0, 1] }
	);

	observer.observe(document.querySelector("#navtop"));
}
