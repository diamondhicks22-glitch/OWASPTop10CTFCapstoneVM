<?php
if ($result->num_rows === 0) {
	die("Username not found.");
}
else {
	header("Location: verification.php")
}






else {
	$query = $conn->query("SELECT secquestions, answers FROM authentication_table WHERE username = ?");
	//Full example in a later level!
}
}


