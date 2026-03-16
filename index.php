<?php
require_once __DIR__ . '/secure_assets/.connect.php';
session_start();
$_SESSION['landing_transition'] = true;
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
	<div class="levels">
	<?php
	$query = $connection->prepare("SELECT ID, completed, title, location  FROM 2025_levels");
	$query->execute();
	$result = $query->get_result();
	while ($row = $result->fetch_assoc()) {
		$class = "levelblock";
		if ($row['ID'] == 0) {
			$class .= " intro";
		}
		if ($row['ID'] == 10) {
			$class .= " final";
		}
		if ($row['completed'] == 1) {
			$class .= " completed";
		}

		echo "<a href=" . htmlspecialchars($row['location']) . " class='$class' data-level='" . $row['ID'] . "'>";
		echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
		echo "</a>";




	}
?>
</div>
	<button type="submit" id="resetProgress" class="button reset">Reset Progress</button>

<div class="coming-soon">	
	<br><h2> Coming Soon (Working Level Titles)</h2>
	<p class="nondev-levels">I Have Authority</p>
	<p class="nondev-levels">Plain and What-text?</p>
	<p class="nondev-levels">Trusted Supply</p>
	<p class="nondev-levels">Are You You?</p>
	<p class="nondev-levels">Injection Headache</p>
</div>
<script src="/landing_page/resetProgress.js"></script>
<script src="/landing_page/levellocks.js"></script>
</body>
</html>
