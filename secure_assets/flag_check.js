document.addEventListener("DOMContentLoaded", () => {
	const form = document.querySelector(".flag-form");

	form.addEventListener("submit", function(e) {
		e.preventDefault();

		const formData = new FormData(form);

		fetch("/../../secure_assets/flag_check.php", {
			method: "POST",
			body: formData
		})
		.then(res => res.json())
		.then(data => {
			if (data.status === "success") {
				window.location.href = data.redirect;
				return;
			}
			if (data.status === "jump") {
				window.location.href = data.redirect;
			}
			else{
				document.querySelector(".flag-error").textContent = (data.message);
			}
		});
	});

});
