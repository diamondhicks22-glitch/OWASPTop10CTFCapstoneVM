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
	<strong>Mishandling of Exceptional Conditions</strong>
	<p>An applications lack of ability to properly prevent, detect, and/or respond to improbable situations. This most commonly ends in an application
	crashing or exposure and exploitation of other vulnerabilities.</p>
	<br>
	
	<h2>Why?</h2>
	<p>Similar to Software or Data Integrity Failures, an application crashing or failing due to being unprepared is an issue. As well as the
	application being able to catch the errors, but expose different vulnerabilities or information. Giving away information that could
	eventually lead to a breach and/or compromise.</p><br>
	
	<h2>How?</h2>
	<p>The application for this level does catch the error properly. The problem arises where in this case, it follows with
	giving the user too much information.</p>
	<img class="lesson-img" src="/../../image_assets/lesson_5/tmi.png">
	<p>A simple solution would be sanitizing the input and giving a generic error for the user. Giving custom error messages
	is essential as system error messages alone can tell the user software or the backend system that is being used.</p>
	<img class="lesson-img" src="/../../image_assets/lesson_5/simpleresponse.png">

	<h2>Further information</h2>
	<a class="info-link" href="https://owasp.org/Top10/2025/A10_2025-Mishandling_of_Exceptional_Conditions/" target="_blank" rel='noopener noreferrer'>OWASP Mishandling of Exceptional Conditions</a>
	<br>

	<a href="../../index.php">Back to Main page</a>
	</main>
</body>
</html>
