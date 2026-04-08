<?php
require_once __DIR__ . '/../../secure_assets/.connect.php';
session_start();
if (isset($_SESSION['landing_transition'])) {
	header("Location: ../../index.php");
	exit();
}
elseif (!isset($_SESSION['level_transition'])) {
	header("Location: level6.php");
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
	<p>Broken access control is when a user is able to act outside of their intended/permitted permissions. This could be
        just accessing resources not meant for them or modifying aspects not they are not supposed to.</p>
	<br>
	
	<h2>Why?</h2>
	<p>This vulnerability is the top of the list with OWASP finding every web application having some form of it. This contains
        unauthorized information access and disclosure, data modification, creation, and deletion.</p><br>
	
	<h2>How?</h2>
	<p>In this level, the vulnerability arises from the program assuming the user is an administrator with no checks.</p>
	<img class="lesson-img" src="/../../image_assets/lesson_6/no_checks.png">
	<p>Most programs would run a backend program like the function below that would run a verification program. Then
        depending on the result, if success make the change requested otherwise deny the user. Best practice is to follow
        Zero Trust principles or "Just in Time" permissions.</p>
	<img class="lesson-img" src="/../../image_assets/lesson_6/function.png">
	<img class="lesson-img" src="/../../image_assets/lesson_6/fix_check.png">

	<h2>Further information</h2>
	<a class="info-link" href="https://owasp.org/Top10/2025/A01_2025-Broken_Access_Control/" target="_blank" rel='noopener noreferrer'>OWASP Broken Access Control</a>
	<br>

	<a href="../../index.php">Back to Main page</a>
	</main>
</body>
</html>
