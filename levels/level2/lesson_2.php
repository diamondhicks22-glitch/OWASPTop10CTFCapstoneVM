<?php
require_once __DIR__ . '/../../secure_assets/.connect.php';
session_start();
if (isset($_SESSION['landing_transition'])) {
	header("Location: ../../index.php");
	exit();
}
elseif (!isset($_SESSION['level_transition'])) {
	header("Location: level2.php");
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
	<strong>Insecure Design</strong>
	<p>Insecure Design focuses on design and architectural flaws. This involves not checking or authenticating a user properly within a site
	or leaving sites open to the public without a form of security.</p>
	<br>
	
	<h2>Why?</h2>
	<p>While availibility must always be a consideration when developing and releasing a site, these vulnerabilities appear when confidentiality
	is not properly protected. Sites a user may be able to jump to could include personal or system information a customer or guest to a site 
	should not be able to access. Access control is one of the most common ways of preventing this by requiring a user to be logged in.
	Other ways include linear user flow, which focus on a restricted amount of available actions, and session timeouts.</p><br>
	
	<h2>How?</h2>
	<p>The vulnerability demonstrated in this lab is a form of URL manipulation. An attacker can modify a URL easily with visible parameters.
	In this case, view=guest to reach the guest portal can be modified to view=admin.</p>
	<img class="lesson-img" src="/../../image_assets/lesson_2/nocheck.png">
	<p>For PHP files, the site pages within this lab, a possible fix is with sessions if not relying on logging in. Starting and giving each 
	session a title and checking if the session is present then using the header() function to redirect the user if the condition is not met.</p>
	<img class="lesson-img" src="/../../image_assets/lesson_2/sessionfix.png">

	<h2>Further information</h2>
	<a class="info-link" href="https://owasp.org/Top10/2025/A06_2025-Insecure_Design/" target="_blank" rel='noopener noreferrer'>OWASP Insecure Design</a>
	<br>

	<a href="../../index.php">Back to Main page</a>
	</main>
</body>
</html>
