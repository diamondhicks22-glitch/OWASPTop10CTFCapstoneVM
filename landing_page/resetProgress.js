document.getElementById("resetProgress").addEventListener("click", function() {

	if (!confirm("Are you sure you want to reset progress?")) return;

	fetch("/landing_page/reset_current.php", {
		method: "POST"
	})
	.then(response => response.text())
	.then(data => {
		if (data.trim() === "success") {
			document.querySelectorAll(".levelblock").forEach(level => {
				const id = parseInt(level.dataset.level);

				level.classList.remove("completed");

				if (id != 0) {
					level.classList.add("locked");

					level.onclick = function(e) {
						e.preventDefault();
						alert("This level is locked.");
					};
				} else {
					
					level.classList.remove("locked");
					level.onclick = null;
				}
		});
		} else {
			alert("Reset failed");
		}
	});
});
