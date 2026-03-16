document.querySelectorAll(".button.hint").forEach(button => {
	button.addEventListener("click", () => {
		const hintNumber = button.dataset.hint;
		const level = button.closest(".hint-section").dataset.level;

		fetch(`/../../secure_assets/hints.php?level_id=${level}&hint_number=${hintNumber}`)
		.then(res => res.json())
		.then(data => {
			const hintBox = button.nextElementSibling;
			hintBox.textContent = data.hint;
		});
	});
});
