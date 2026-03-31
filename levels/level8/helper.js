document.getElementById("submit").addEventListener("click", function(e) {
	e.preventDefault();

	const complaint = document.getElementById("complaintInput").value;

	const formData = new FormData();
	formData.append("complaint", complaint);


	fetch("helper.php", {
		method: "POST",
		body: formData
	})
	.then(res => res.json())
	.then(data => {
	const output = document.getElementById("output");
		output.innerHTML = data.data;
	});
});
