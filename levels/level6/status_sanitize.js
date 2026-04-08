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
		statusText.textContent = `OUTAGE: ${code} - Unknown Error`;
	}
});


