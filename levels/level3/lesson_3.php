<?php
require_once __DIR__ . '/../../secure_assets/.connect.php';
session_start();
if (isset($_SESSION['landing_transition'])) {
	header("Location: ../../index.php");
	exit();
}
elseif (!isset($_SESSION['level_transition'])) {
	header("Location: level3.php");
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
	<strong>Software or Data Integrity Failures</strong>
	<p>This vulnerability targets the necessity of many languages and softwares to have strict inputs, code, or files.
	 Exploiting it allows for malicous files uploads, sites to break completely or give away information.</p>
	<br>
	
	<h2>Why?</h2>
	<p>Languages such as PHP, C++, C, and SQL require strict input types for proper functionality. A programmer should never assume
	a user will always enter exactly what is needed and must check and/or sanitize any input. These checks do not need to be extremely
	specific or very long as many languages have a built-in function to check whether an input is a proper integer or a proper string.</p><br>
	
	<h2>How?</h2>
	<p>This challenge focused on the lack of input sanitization and checking. In this case, the input required an int, but if a string or
	character is entered, then the input fails. Alongside the echo of the error giving it to the user.</p>
	<img class="lesson-img" src="/../../image_assets/lesson_3/invalidandtoomuch.png">
	<img class="lesson-img" src="/../../image_assets/lesson_3/badecho.png">
	<p>PHP has a check that solves this issue, this can then be modified to add an error log or just not respond to the user and await a new input.</p>
	<img class="lesson-img" src="/../../image_assets/lesson_3/fixedlogs.png">

	<h2>Further information</h2>
	<a class="info-link" href="https://owasp.org/Top10/2025/A08_2025-Software_or_Data_Integrity_Failures/" target="_blank" rel='noopener noreferrer'>OWASP Software or Data Integrity Failures</a>
	<br>

	<a href="../../index.php">Back to Main page</a>
	</main>
</body>
</html>
