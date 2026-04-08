<?php
require_once __DIR__ . '/../../secure_assets/.connect.php';
session_start();
if (!isset($_SESSION['landing_transition']) && !isset($_SESSION['level_transition'])) {
	header("Location: ../../index.php");
	exit();
}
session_unset();
session_destroy();
session_start();
$_SESSION['level_transition'] = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OWASP-Inspired CTF Site</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/../../secure_assets/sitecss.css">
	<link rel="icon" href="/image_assets/Logos/WAVLCapstoneBlackIcon.svg" sizes="32x32">
</head>

<body>
	<header class= "company-header">
		<span class="fake-company">Securissima Company</span>
		<form class="flag-form">
			<input type="hidden" name="level_id" value="5">
			<input type="hidden" name= "level_folder" value= "levels/level5">
			<input type ="hidden" name="level_page" value="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" name="flag" class="flag-text-input" placeholder="Enter Flag">
			<button type="submit" class="button level">Submit Flag</button>
		</form> 
	</header>
<div class="flag-error"></div>
	
	<main class= "challenge-content">

		<div class="hint-section" data-level="5">
		
		<button class="button hint" data-hint="1">Hint 1</button>
		<div class= "hint-text" id= "hint-1"></div>

		<button class="button hint" data-hint="2">Hint 2</button>
		<div class= "hint-text" id= "hint-2"></div>

		<button class="button hint" data-hint="3">Hint 3</button>
		<div class= "hint-text" id= "hint-3"></div>
		</div>

		<div "second-section">
		<div class ="fluff-text">



		<p>Securissima focuses on providing our clients with the most up-to-date and secure information to better secure their customers.
		In the age where technology is everything, securing your assets from attackers and threats becomes the up-most-priority. We provide 
		pen-testing, consultations, framework and policy reviews, and much more. </p>
		
		<br>
		<p>For a limited time, we are offering free quotes below! Feel free to enter a number of devices within your company. Afterwards,
		if you are interested, call us at +X (XXX) XXX-XXXX.</p>
		
		</div>
		<div class="quote-box">
			<form id="quantityForm">
				<label>How many servers/cameras in your company?</label><br>
				<input type="text" id='quantity' name="quantity">
			</form>
			<label id='error' class='error'></label>

			<button id="quantitySubmit" class="button" type="submit">Submit</button>
		</div>
</div>
<script src="/../../secure_assets/flag_check.js"></script>
<script src="/../../secure_assets/hints.js"></script>
<script src="error.js"></script>

</main>

