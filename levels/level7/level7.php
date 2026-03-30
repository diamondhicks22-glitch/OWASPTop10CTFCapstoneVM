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
			<input type="hidden" name="level_id" value="7">
			<input type="hidden" name= "level_folder" value= "levels/level7">
			<input type ="hidden" name="level_page" value="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" name="flag" class="flag-text-input" placeholder="Enter Flag">
			<button type="submit" class="button level">Submit Flag</button>
		</form> 
	</header>
<div class="flag-error"></div>
	
	<main class= "challenge-content">

		<div class="hint-section" data-level="7">
		
		<button class="button hint" data-hint="1">Hint 1</button>
		<div class= "hint-text" id= "hint-1"></div>

		<button class="button hint" data-hint="2">Hint 2</button>
		<div class= "hint-text" id= "hint-2"></div>

		<button class="button hint" data-hint="3">Hint 3</button>
		<div class= "hint-text" id= "hint-3"></div>
		</div>

		<div "second-section">
		<div class ="fluff-text">

		<p>Welcome to the Securissima Guest Portal. Use our account lookup below or reach out to inquire about different services.</p>
		</div>
		
		<div class = "fluff-text">
		<input type = "text" class="flag-text-input" name="accountID" id="accountID" placeholder="Enter 5 digit number">
		<button type="submit" id="lookup" class="button">Look Up</button>
		</div>

		<div id="output" class="fluff-text"></div>
	
</div>
<script src="/../../secure_assets/flag_check.js"></script>
<script src="/../../secure_assets/hints.js"></script>
<script src="lookup.js"></script>

</main>

