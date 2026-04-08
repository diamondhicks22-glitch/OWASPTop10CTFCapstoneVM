<?php
require_once __DIR__ . '/../../secure_assets/.connect.php';
session_start();
if (isset($_SESSION['landing_transition'])) {
	header("Location: ../../index.php");
	exit();
}
elseif (!isset($_SESSION['level_transition'])) {
	header("Location: level10.php");
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
	<strong>Injection</strong>
	<p>When an application allows untrusted user input to be sent and the input executes as part of the programs code or
        as part of an attached aspects code. This includes Cross Site Scripting (XSS) as well as SQL injections.</p>
	<br>
	
	<h2>Why?</h2>
	<p>Injection itself is not an extremely difficult attack, but it is one normally from more sophisticated attackers.
        If an attacker can figure out how a command is ran, they can figure out the entire database layout and even credentials
        to that database, for this program: SQL. The database could contain employee and customer information, sensitive
        information from the business itself, or more that an attacker could use for financial gain or other ideals.</p><br>
	
	<h2>How?</h2>
	<p>Many injection attacks come from a developer assuming a user will not try to input invalid data and/or use only simple
        checks to prevent it. An injection uses SQL or other language specifics to target a system at its backend. In this case,
        part of the flaw is by only using query and not binding a param instead.</p>
	<img class="lesson-img" src="/../../image_assets/lesson_10/use_prepare.png">
	<p>Binding a param and using a prepare() statement treats input strictly as data, not as part of the query string.
        Other checks must still be used to ensure proper handling of input as it is not a perfect solution and can still be broken.</p>

	<h2>Further information</h2>
	<a class="info-link" href="https://owasp.org/Top10/2025/A05_2025-Injection/" target="_blank" rel='noopener noreferrer'>OWASP Injection</a>
	<br>
	<a href="../../index.php">Back to Main page</a>
	</main>
</body>
</html>
