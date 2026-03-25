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
			<input type="hidden" name="level_id" value="6">
			<input type="hidden" name= "level_folder" value= "levels/level6">
			<input type ="hidden" name="level_page" value="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" name="flag" class="flag-text-input" placeholder="Enter Flag">
			<button type="submit" class="button level">Submit Flag</button>
		</form> 
	</header>
<div class="flag-error"></div>
	
	<main class= "challenge-content">

		<div class="hint-section" data-level="6">
		
		<button class="button hint" data-hint="1">Hint 1</button>
		<div class= "hint-text" id= "hint-1"></div>

		<button class="button hint" data-hint="2">Hint 2</button>
		<div class= "hint-text" id= "hint-2"></div>

		<button class="button hint" data-hint="3">Hint 3</button>
		<div class= "hint-text" id= "hint-3"></div>
		</div>

		<div "second-section">
		<div class ="fluff-text">

		<p>Welcome to the Securissima Guest Portal. Browse our resources below or reach out to inquire about different services.</p>
		</div>	
	
		<div class= "fluff-text">
		<p>Current System status is <span id="server_status">Functioning</span></p>
	</div>
	
	<button id= "adminToggle" class="button adminToggle">Update Status</button>
	<div id= "statusForm" class= "statusForm">
	<button id="functioning" class= "button">Functioning</button>
	<button id="outage" class="button">Outage</button>
	<input type="text" id= "errorCode" class="flag-text-input level" placeholder="Enter error code ex. 404">
	<button type="submit" class="button errorCode" id= "errorCodeButton">Submit</button>
	</div>
</div>
<script src="/../../secure_assets/flag_check.js"></script>
<script src="/../../secure_assets/hints.js"></script>
<script src="status.js"></script>

</main>

