document.addEventListener("DOMContentLoaded", function(e) {

	document.getElementById("output").classList.add("hidden");

});

document.getElementById("lookup").addEventListener("click", function(e) {
	e.preventDefault();

	const accountID = document.getElementById("accountID").value;

	const formData = new FormData();
	formData.append("account_id", accountID);

	fetch("lookup.php", {
		method: "POST",
		body: formData
	})
	.then(res => res.json())
	.then(data => {
	const output = document.getElementById("output");
		output.innerHTML = "";

		if (data.status === "success") {
			output.classList.remove("hidden");
			data.data.forEach(row => {
				output.innerHTML += Object.values(row).join(" | ") + "<br>";
			});
		}
		else if (data.status === "not_found") {
			output.classList.remove("hidden");
			output.innerHTML = "No account found.";
		}
		else {
			data.data.forEach(row => {
				output.classList.remove("hidden");
				output.innerHTML += Object.values(row).join(" | ") + "<br>";
			});

		}
	});
});

