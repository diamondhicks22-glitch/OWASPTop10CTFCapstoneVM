<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OWASP-Inspired CTF Site</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/../../secure_assets/sitecss.css">
	<link rel="icon" href="/image_assets/Logos/WAVLCapstoneBlackIcon.svg" sizes="32x32">
</head>



<?php

$view = $_GET['view'] ?? 'guest';

if ($view === 'guest') {
?>
<body>
	<header class= "company-header">
		<span class="fake-company">Securissima Company</span>
</header>

<main>
	<div class="fluff-text">
	<p>Guest portal is currently non-functioning due to maintenance!</p>
	</div>
	<div class="login-box">
			<form>
				<label>Username</label><br>
				<input type="text" name="username">
				<br>
				<label>Password</label><br>
				<input type="text" name="password">
				<br>
				<button type="submit">Log in</button>
				
				<a href='level2.php'>Return to main page</a>
			</form>

</main>
<?php
}
elseif ($view === 'admin') {
?>
<body>
	<header class= "company-header">
		<span class="fake-company">Securissima Company</span>
</header>

<main>
	<div class="fluff-text">
	<p> Administrator tools and reports</p>
	<p> Internal Access only, please contanct your supervisor if you are having issues connecting to servers.</p>
	<p class="flag-text"> UR1_m&commat;nIp </p>
	<a href='level2.php'>Return to main page</a>

	</div>
</main>

<?php
}
else {
	header("Location: level2.php");
}
?>
