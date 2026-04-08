<?php
require_once __DIR__ . '/../../secure_assets/.connect.php';
session_start();
if (isset($_SESSION['landing_transition'])) {
	header("Location: ../../index.php");
	exit();
}
elseif (!isset($_SESSION['level_transition'])) {
	header("Location: level7.php");
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
	<strong>Cryptographic Failures</strong>
	<p>Failures in cryptography can refer to data at rest, in this case, such as within a database. Including improper or
        poor encryption via weak or old methods, incomplete encryption (such as only in transport and not at rest), and more.</p>
	<br>
	
	<h2>Why?</h2>
	<p>Data that should be protected includes personal information such as password, SSNs, identifications, and more. If
        there is a breach, hashing information is not able to be reversed if done properly. Encryption is necessary
        to make data unreadable upon first reading. Meant to introduce friction and not allow attackers easy access to the
        data.</p><br>
	
	<h2>How?</h2>
	<p>The problem arises in what can be assumed to be left over debug. The code directly protects against a few
        issues with input sanitization and injection by preparing a query. Yet, the leftover debug, while catching the fail
        causes everything to be output.</p>
	<img class="lesson-img" src="/../../image_assets/lesson_7/problem.png">
	<p>Then is the issue within the database itself. Encryption does not mean secure. Especially in regards to encryption
        that can be very easily reversed such as base64 and binary. The only example properly done is the administrator
        which is hashed.</p>
    <p>A form of solution involves double checking debugs are removed, in regards to documenting where they are placed and why
        is essential during development and testing. As well as proper data confidentiality with proper hashing methods.</p>

	<h2>Further information</h2>
	<a class="info-link" href="https://owasp.org/Top10/2025/A04_2025-Cryptographic_Failures/" target="_blank" rel='noopener noreferrer'>OWASP Cryptographic Failures</a>
	<br>

	<a href="../../index.php">Back to Main page</a>
	</main>
</body>
</html>
