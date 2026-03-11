<?php
require_once __DIR__ . '/../../secure_assets/.connect.php';
session_start();
if (!isset($_SESSION['landing_transition'])) {
	header("Location: ../../index.php");
	exit();
}
session_unset();
session_destroy();
session_start();
$_SESSION['level_transition'] = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OWASP-Inspired CTF Site</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/../../secure_assets/sitecss.css">
	<link rel="icon" href="/image_assets/Logos/WAVLCapstoneBlackIcon.svg" sizes="32x32">
</head>

<body>
	<header class= "company-header">
		<span class="fake-company">Securissima Company</span>
		<form method="POST" action="/../../secure_assets/flag_check.php">
			<input type="hidden" name="level_id" value="0">
			<input type="hidden" name= "level_folder" value= "levels/Intro">
			<input type ="hidden" name="level_page" value="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" name="flag" class="flag-text-input" value="Enter Flag">
			<button type="submit" class="button level">Submit Flag</button>
		</form> 
	</header>

	<main>

		<p>Welcome to the Web Application Vunerabilities Capture-the-Flag inspired by the Open Worldwide Application Security Project (OWASP).
		This site and subsquent Virtual Machine (VM) focuses on the <a href='https://owasp.org/Top10/2025/' target='_blank' rel='noopener noreferrer'> 
		2025 Top Ten from OWASP.</a> The Top Ten highlights the most critical security risks facing web applications from the responding year. </p>

		<br>
		<p>The exercises will show and explain some examples of how these vunerabilites occur, how they are exploited, and how they can be 
		remedied.</p>

		<br>
		<h2>Why?</h2>

		<p>While many exercises online, including OWASP's own JuiceShop, teaches how to exploit these vunerabilities, in a world that is 
		extremely technology reliant, we must also learn how to defend against the exploits as well. Starting with how these vunerabilites
		exist in the first place. The aim of this project is to fulfill the gap that many exercises and activities do not cover in an easier
		reach medium.</p>
		
		<br>
		<p>All the challenges will be completed via flag submissions in the top right. For this program, the flag format will be ${L1k3_Thi$}. 
		Sometimes you may be given the text within only: S0l0_30rDs, it is important to remember the format so when submitting it will be: 
		${S0l0_30rDs}. There is no limits to attempts, that does not mean trying to brute force it.</p>
		
		<br>
		<p>Here is the first example for free, after submission you will be taken to a page that, for future challenges, will explain exploits
		as well as a link to OWASP's own further technical explanation for vunerabilities should you wish to explore further</p>

		<br>
		<p class = 'flag-text'>G1HF_U$3R</p>

</main>
