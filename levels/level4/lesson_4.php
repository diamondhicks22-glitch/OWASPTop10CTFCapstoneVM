<?php
require_once __DIR__ . '/../../secure_assets/.connect.php';
session_start();
if (isset($_SESSION['landing_transition'])) {
	header("Location: ../../index.php");
	exit();
}
elseif (!isset($_SESSION['level_transition'])) {
	header("Location: level4.php");
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
	<strong>Security Misconfiguration</strong>
	<p>Normally security misconfigurations can happen when a system's hardware or ports are not handled correctly or uneccessary software is
	not removed. This also occurs in highly configurable software used within companies that have too much access on systems.</p>
	<br>
	
	<h2>Why?</h2>
	<p>Improperly configured software and hardware allows attackers to have more access points to the system. It can also release information
	to an attacker if given the proper space to reach the information. Often leading to compromised software and servers most common with
	account hijacking, ransomware, and data exfilitration to an outside reciever.</p><br>
	
	<h2>How?</h2>
	<p>In this lab, the configuration is from a mix of issues. The most obvious one being the lack of authentication for the system from the user.
	This is normally mitigated by having the user verify in some shape or form, e.g email verification with a OTP (One Time Passcode).</p>
	<img class="lesson-img" src="/../../image_assets/lesson_4/badqueryloop.png">
	<p>An easy and more managable way for smaller business who may not have the resources involves requiring the user to contact the company personally or
	setting up a security question system which would be stored and encrypted within a database.</p>
	<img class="lesson-img" src="/../../image_assets/lesson_4/properauth.png">
	<img class="lesson-img" src="/../../image_assets/lesson_4/redirectauth.png">

	<h2>Further information</h2>
	<a class="info-link" href="https://owasp.org/Top10/2025/A02_2025-Security_Misconfiguration/" target="_blank" rel='noopener noreferrer'>OWASP Security Misconfiguration</a>
	<br>

	<a href="../../index.php">Back to Main page</a>
	</main>
</body>
</html>
