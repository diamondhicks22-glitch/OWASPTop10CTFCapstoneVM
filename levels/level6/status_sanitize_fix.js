function verifyAccount(account) {
    let formData;
    formData = new FormData();
    formData.append("account", account);
    fetch("verify_account.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        if (data.status === "success") {
            return "success";
        } else {
            return "fail";
        }
    });
}

document.getElementById("errorCodeButton").addEventListener("click", function() {
    const account = document.getElementById("account").value.trim();
	const code = document.getElementById("errorCode").value.trim();
	const statusText = document.getElementById("server_status");

    const validCodes = {
        "500" : "Internal Server Error",
        "503" : "Service Unavailable",
        "404" : "Not Found"
    };

    if (verifyAccount(account) !== "success") {
        alert("Invalid account");
    }
    else {
        if (validCodes[code]) {
            statusText.textContent = `OUTAGE: ${code} - ${validCodes[code]}`;
        }
        else {
            statusText.textContent = `OUTAGE: ${code} - Unknown Error`;
        }
    }
});


