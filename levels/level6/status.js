document.addEventListener("DOMContentLoaded", function() {
	const functionButton = document.getElementById("functioning");
	const outageButton = document.getElementById("outage");

	functionButton.classList.add("disabled");
	outageButton.classList.add("active");

});


document.getElementById("adminToggle").addEventListener("click", function() {
	document.getElementById("statusForm").classList.add("show");
});

document.getElementById("outage").addEventListener("click", function() {
	const functionButton = document.getElementById("functioning");
	const outageButton = document.getElementById("outage");

	document.getElementById("errorCode").classList.add("show");
	document.getElementById("errorCodeButton").classList.add("show");
	functionButton.classList.remove("disabled");
	functionButton.classList.add("active");
	outageButton.classList.remove("active");
	outageButton.classList.add("disabled");

});


document.getElementById("functioning").addEventListener("click", function() {
		const functionButton = document.getElementById("functioning");
		const outageButton = document.getElementById("outage");

		functionButton.classList.remove("active");
		functionButton.classList.add("disabled");
		outageButton.classList.remove("disabled");
		outageButton.classList.add("active");
		document.getElementById("errorCode").classList.remove("show");
		document.getElementById("errorCodeButton").classList.remove("show");

	});

document.getElementById("errorCodeButton").addEventListener("click", function() {
	const code = document.getElementById("errorCode").value.trim();
	const statusText = document.getElementById("server_status");

	const validCodes = {
		"500" : "Internal Server Error",
		"503" : "Service Unavailable",
		"404" : "Not Found"
	};

	if (validCodes[code]) {

		statusText.textContent = `OUTAGE: ${code} - ${validCodes[code]}`;

	} else {
		statusText.textContent = `OUTAGE: ${code} - Unknown Error 0ut_oF_s1gHt`;
	}
});


