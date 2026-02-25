<?php
include '.connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OWASP-Inspired CTF Site</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="sitecss.css">
</head>

<body>
	<header>
		<!--ADD NAV HERE-->
		<form method="POST" action="flag_check.php">
			<input type="hidden" name="level_id" value="0">
			<input type ="hidden" name="level_page" value="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" id="flag" name="flag" value="Enter Flag">
			<button type="submit">Submit Flag</button>
		</form> 
	</header>

	<main>
		<h1>Securissima Company</h1>

		<p>Securissima focuses on protecting our users information to the highest degree. We offer consultations, pentesting, and 
		<br>
