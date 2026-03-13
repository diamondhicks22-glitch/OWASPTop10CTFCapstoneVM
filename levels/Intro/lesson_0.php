<?php
require_once __DIR__ . '/../../secure_assets/.connect.php';
session_start();
if (isset($_SESSION['landing_transition'])) {
	header("Location: ../../index.php");
	exit();
}
elseif (!isset($_SESSION['level_transition'])) {
	header("Location: intro.php");
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
			<p class="warning">DEMO STATE | THERE MAY BE BUGS</p>
		</div>
		<div class="header-fade"></div>
		<!--ADD NAV HERE-->
	</header>


	<main>
	<h2>What?</h2>
	<strong>Lesson Pages</strong>
	<p>Lesson pages will be present after you complete each level. It is recommended you read through them for more information
	on the vulnerability and example fixes. At the bottom of each page will also be a link to the vulnerbilites page on the OWASP
	site.</p>
	<br>
	
	<h2>Why?</h2>
	<p>The aim of these pages is to fill the gap many other applications have when it comes to vulnerability education. Instead of just
	letting you break the system and get points, this page also teaches you how to fix them. As many of these vulnerabilities are multiple
	small mistakes or even single lines of code that lead to a bigger issue. Especially to those pursuing cybersecurity, knowing how to exploit
	and defend are necessary skills.</p>
	<br>

	<h2>Further information</h2>
	<a class="info-link" href="https://owasp.org/Top10/2025/" target="_blank" rel='noopener noreferrer'>OWASP Top 10 of 2025 this lab is based on</a>
	<br>

	<a href="../../index.php">Back to Main page</a>
	</main>
</body>
</html>
