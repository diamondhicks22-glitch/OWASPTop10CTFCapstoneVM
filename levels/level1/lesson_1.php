<?php
require_once __DIR__ . '/../../secure_assets/.connect.php';
session_start();
if (isset($_SESSION['landing_transition'])) {
	header("Location: ../../index.php");
	exit();
}
elseif (!isset($_SESSION['level_transition'])) {
	header("Location: level1.php");
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Web Application Vulnerability Lab</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/secure_assets/sitecss.css">
	<link rel="icon" href="/image_assets/Logos/WAVLCapstoneBlackIcon.svg" sizes="32x32">
</head>

<body>
	<header class="site-header">
		<div class ="header-content">
			<img src="/image_assets/Logos/WAVLCapstoneWhiteHeader.svg" alt="Web Application Vulnerability Lab" class="logo header">
			<p class="warning">PROTOTYPE STATE | THERE MAY BE BUGS</p>
		</div>
		<div class="header-fade"></div>
		<!--ADD NAV HERE-->
	</header>


	<main>
	<h2>What?</h2>
	<strong>Security Logging and Alerting Failures</strong>
	<p>A vulnerability that exposes important information via an error or within accessible logs.
	While the program may not break from the error, it gives the user and possible attacker information
	that can aid in exploitation. </p>
	<br>
	
	<h2>Why?</h2>
	<p>Some errors are explicit to certain operating systems and web applications eg. Blue Screen of
	Death (BSOD) errors on Windows or rpmdb errors on Linux/Unix environments. Others, like the one in this lab, give information
	 about user accounts and aid in brute force attacks or others of similar execution. 
	While a system must handle errors gracefully and logging is essential, confidentiality is a major factor when doing so. 
	Errors should be logged internally where someone within the managing IT system can see and investigate and not be available to the user.
	This does not include broad "Incorrect" or "Not Found" errors. </p>
	<br>
	
	<h2>How?</h2>
	<p>In this lab, the example includes a simple case of "echo"-ing the error alongside an error that gives too much information.</p>
	<img class="lesson-img" src="/../../image_assets/lesson_1/toomucherror.png">
	<img class="lesson-img" src="/../../image_assets/lesson_1/errorecho.png">
	<p>A form of fix would making the error internal if specifications are needed, in this case error_log, and only displaying to the user
	the needed information via the die() command.</p>
	<img class="lesson-img" src="/../../image_assets/lesson_1/lesson1_fix.png">

	<h2>Further information</h2>
	<a class="info-link" href="https://owasp.org/Top10/2025/A09_2025-Security_Logging_and_Alerting_Failures/" target="_blank" rel='noopener noreferrer'>OWASP Security Logging and Alerting Failures</a>
	<br>

	<a href="../../index.php">Back to Main page</a>
	</main>
</body>
</html>
