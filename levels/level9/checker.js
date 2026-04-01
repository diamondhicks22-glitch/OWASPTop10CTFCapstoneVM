document.addEventListener("DOMContentLoaded", function(e) {

	document.getElementById("output").classList.add("hidden");

});



document.getElementById("submit").addEventListener("click", function(e) {
	e.preventDefault();

	const username = document.getElementById("username").value;

	const password = document.getElementById("password").value;

	if (username === "AdminJohnson" && password === "youshouldhavesomethingbetter")
		{
			const formData = new FormData();
			formData.append("javascript", "true");

			fetch("key.php", {
				method: "POST",
				body: formData
			})
			.then(res => res.json())
			.then(data => {
				const output = document.getElementById("output");
					output.classList.remove("hidden");
					output.innerHTML = data.key;
		});
		}
	else {
		const output = document.getElementById("output");
			output.classList.remove("hidden");
			output.innerHTML = "Invalid login";

	}
});
