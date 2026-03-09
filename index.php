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
		if ($row['completed']) {
			if ($row['ID'] === 0) {
				echo "<a href=" . htmlspecialchars($row['location']) . " class= 'levelblock intro completed'>";
				echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
				echo "</a>";

			}
			elseif ($row['ID'] === 10) {
				echo "<a href=" . htmlspecialchars($row['location']) . " class= 'levelblock final completed'>";
				echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
				echo "</a>";
			}
			else{
				echo "<a href=" . htmlspecialchars($row['location']) . " class= 'levelblock completed'>";
				echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
				echo "</a>";
			}
		}
		else {
			if ($row['ID'] === 0) {
				echo "<a href=" . htmlspecialchars($row['location']) . " class= 'levelblock intro'>";
				echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
				echo "</a>";
			}
			elseif ($row['ID'] === 10) {
				echo "<a href=" . htmlspecialchars($row['location']) . " class= 'levelblock final'>";
				echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
				echo "</a>";
			}
			else {
				echo "<a href=" . htmlspecialchars($row['location']) . " class= 'levelblock'>";
				echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
				echo "</a>";
			}
		}
	}
?>
</div>
	<form method="POST" action="/landing_page/reset_current.php">
	<button type="submit" class="button">Reset Progress</button>
	</form>

<div class="coming-soon">	
	<br><h2> Coming Soon (Working Level Titles)</h2>
	<p class="nondev-levels">I Have Authority</p>
	<p class="nondev-levels">Plain and What-text?</p>
	<p class="nondev-levels">Trusted Supply</p>
	<p class="nondev-levels">Are You You?</p>
	<p class="nondev-levels">Injection Headache</p>
</div>
</body>
</html>
