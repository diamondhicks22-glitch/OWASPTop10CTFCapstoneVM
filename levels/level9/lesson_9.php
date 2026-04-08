<?php
require_once __DIR__ . '/../../secure_assets/.connect.php';
session_start();
if (isset($_SESSION['landing_transition'])) {
	header("Location: ../../index.php");
	exit();
}
elseif (!isset($_SESSION['level_transition'])) {
	header("Location: level9.php");
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
	<strong>Authentication Failures</strong>
	<p>Present when an attacker is able to make a system believe a proper user is present.</p>
	<br>
	
	<h2>Why?</h2>
	<p>Most initial breaches, if not already in one of power, leads to privilege escalation. Often from guest to user to admin
        or other layers through a system. If the flaw exists in one area is it more than likely it exists in others and
        an attacker will take advantage of that to access and exist long term in a system.</p><br>
	
	<h2>How?</h2>
	<p>Upon looking into source code, a user can see any directly implemented JavaScript or third party applications. In
        more simple programs where the files are directly associated via src, these links can be clicked and easily viewed.
        Any sensitive information can be seen by proxy.</p>
	<img class="lesson-img" src="/../../image_assets/lesson_9/really.png">
	<p>All aspects of code should be given the same scrutiny if containing any sensitive information or interacting with such.
        Programs should, if comparing, be hashing any information and using comparisons to hashes to confirm and validate a user.
        Plaintext, unless a user should be able to read it such as with the lesson pages, is highly discouraged.</p>

	<h2>Further information</h2>
	<a class="info-link" href="https://owasp.org/Top10/2025/A07_2025-Authentication_Failures/" target="_blank" rel='noopener noreferrer'>OWASP Authentication Failures</a>
	<br>
	<a href="../../index.php">Back to Main page</a>
	</main>
</body>
</html>
