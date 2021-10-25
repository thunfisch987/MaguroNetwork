/*jshint esversion: 6 */
function tooltiplistener() {
	const tooltipTriggerList = [].slice.call(
		document.querySelectorAll('[data-bs-toggle="tooltip"]')
	);
	const tooltipList = tooltipTriggerList.map(
		(tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
	);
}
