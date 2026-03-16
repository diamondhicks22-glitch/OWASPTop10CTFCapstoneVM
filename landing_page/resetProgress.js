document.getElementById("resetProgress").addEventListener("click", function() {

	if (!confirm("Are you sure you want to reset progress?")) return;

	fetch("/landing_page/reset_current.php", {
		method: "POST"
	})
	.then(response => response.text())
	.then(data => {
		if (data.trim() === "success") {
			document.querySelectorAll(".levelblock.completed")
				.forEach(level => level.classList.remove("completed"));
		}
		else {
			alert("Reset failed");
		}
	});
});
