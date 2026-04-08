<?php
require_once __DIR__ . '/../../secure_assets/.connect.php';
session_start();
if (isset($_SESSION['landing_transition'])) {
	header("Location: ../../index.php");
	exit();
}
elseif (!isset($_SESSION['level_transition'])) {
	header("Location: level5.php");
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
	<strong>Broken Access Control</strong>
	<p>TODO</p>
	<br>
	
	<h2>Why?</h2>
	<p>TODO</p><br>
	
	<h2>How?</h2>
	<p>TODO</p>
	<img class="lesson-img" src="/../../image_assets/lesson_6/TODO">
	<p>TODO</p>
	<img class="lesson-img" src="/../../image_assets/lesson_6/TODO">

	<h2>Further information</h2>
	<a class="info-link" href="https://owasp.org/Top10/2025/A01_2025-Broken_Access_Control/" target="_blank" rel='noopener noreferrer'>OWASP Broken Access Control</a>
	<br>

	<a href="../../index.php">Back to Main page</a>
	</main>
</body>
</html>
