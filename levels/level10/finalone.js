document.addEventListener("DOMContentLoaded", function(e) {

	document.getElementById("output").classList.add("hidden");

});

document.getElementById("submit").addEventListener("click", function(e) {
	e.preventDefault();

	const output = document.getElementById("output");
	output.innerHTML = "";

	const service = document.getElementById("serviceSearch").value;

	const formData = new FormData();
	formData.append("service", service);

			fetch("service_grab.php", {
				method: "POST",
				body: formData
			})
			.then(res => res.json())
			.then(data => {

				output.classList.remove("hidden");
				if (data.foundnum === 0) {
					output.innerHTML = "No services found.";
				}
				else {
					output.innerHTML += data.foundnum;
					output.innerHTML += " services found.<br>";
					data.data.forEach(row => {
						let color = "";
						if (row.service_name === "service_status") {
							color = "style='color: red;'";
						}
						output.innerHTML += `<span ${color}>${row.service_name} | ${row.status}</span><br>`;
					});
				}
				

		});
	});
