document.getElementById("quantitySubmit").addEventListener('click', function(e) {
		e.preventDefault();

		const error = document.getElementById('error');
		error.innerHTML = "";

		const quantity = document.getElementById('quantity').value;

		const formData = new FormData();
		formData.append("quantity", quantity);

		fetch("error.php", {
			method: "POST",
			body: formData
		})
		.then(res => res.json())
		.then(data => {
			error.innerHTML += data.data;
		});
});
