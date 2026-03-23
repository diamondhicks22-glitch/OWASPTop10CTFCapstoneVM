function applyLocking() {

	const levels = document.querySelectorAll(".levelblock");
	console.log(levels);
	const completed = [];

	levels.forEach(level => {
		const id = parseInt(level.dataset.level);

		if (level.classList.contains("completed")) {
			completed.push(id);
		}
	});

	levels.forEach(level => {
		const id = parseInt(level.dataset.level);
		let locked = false;

		if (id > 0 && !completed.includes(0)) locked = true;

		if (id >= 4 && id <= 6 && ![1,2,3].some(l => completed.includes(l))) locked = true;

		if (id >= 7 && id <= 9 && ![4,5,6].some(l => completed.includes(l))) locked = true;

		if (id === 10 && ![7,8,9].some(l => completed.includes(l))) locked = true;

		if (locked) {
			level.classList.add("locked");

			level.addEventListener("click", function(e) {
				e.preventDefault();
				alert("This level is locked.");
			});
	}
	});
}

document.addEventListener("DOMContentLoaded", function() {
	applyLocking();
});

document.getElementById("resetProgress").addEventListener("click", function() {
	applyLocking();
});

