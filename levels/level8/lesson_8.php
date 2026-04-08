<?php
require_once __DIR__ . '/../../secure_assets/.connect.php';
session_start();
if (isset($_SESSION['landing_transition'])) {
	header("Location: ../../index.php");
	exit();
}
elseif (!isset($_SESSION['level_transition'])) {
	header("Location: level8.php");
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
	<strong>Software Supply Chain Failures</strong>
	<p>Often malicious code from not verifying third-party software, issues caused by an update from a third-party, or
        improper implementation.</p>
	<br>
	
	<h2>Why?</h2>
	<p>Third party software is often essential especially in bigger system to provide services to customers. That data
        tends to store information within the company or outside of it. As this software is not exclusive to one company
        is it necessary to ensure that it is not a widespread issue and that code is verified before implementation.</p><br>
	
	<h2>How?</h2>
	<p>In this case, implementation of a helper.php is poorly done and not verified. As it writes directly to the folder of
        the page with the report when it submits. The report would normally be sent to a backend and have some form of access
        control. If the data included any credentials or sensitive information, the user can easily access it using the URL.</p>
	<img class="lesson-img" src="/../../image_assets/lesson_8/bad_help.png">
	<p>Solutions would include verifying the code to ensure what it did and not blindly trusting the third-party or taking the
        code and modifying it for the proper purpose as per a systems dependency. Since the code is PHP, this can be done
        to connect directly to the company's database and send complaints to a specific table.</p>

	<h2>Further information</h2>
	<a class="info-link" href="https://owasp.org/Top10/2025/A03_2025-Software_Supply_Chain_Failures/" target="_blank" rel='noopener noreferrer'>OWASP Software Supply Chain Failures</a>
	<br>
	<a href="../../index.php">Back to Main page</a>
	</main>
</body>
</html>
