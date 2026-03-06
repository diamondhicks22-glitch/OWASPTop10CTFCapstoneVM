<?php
require_once __DIR__ . '/secure_assets/.connect.php';
session_start();
$_SESSION['landing_transition'] = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OWASP-Inspired CTF Site</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/secure_assets/sitecss.css">
</head>

<body>
	<header class="site-header">
		<h1 class="site-title">OWASP-Inspired CTF Site</h1>
		<p class="warning">DEMO STATE | THERE MAY BE BUGS</p>

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
				echo "<div class= 'levelblock intro completed'>";
			}
			elseif ($row['ID'] === 10) {
				echo "<div class= 'levelblock final completed'>";
			}
			else{
			echo "<div class='levelblock completed'>";
			}
		}
		else {
			if ($row['ID'] === 0) {
				echo "<div class= 'levelblock intro'>";
			}
			elseif ($row['ID'] === 10) {
				echo "<div class= 'levelblock final'>";
			}
			else {
				echo "<div class='levelblock'>";
			}
		}
		echo "<h3>";
		echo "<a href=" . htmlspecialchars($row['location']) . ">" . htmlspecialchars($row['title']) . "</a>";
		echo "</h3>";
		echo "</div>";
	}
?>
	
	</div>
	<br><p> Coming Soon </p>
	<a>Level6TITLE</a><br>
	<a>Level7TITLE</a><br>
	<a>Level8TITLE</a><br>
	<a>Level9TITLE</a><br>
	<a>Level10TITLE</a><br>

	<form method="POST" action="/landing_page/reset_current.php">
	<button type="submit">Reset Progress</button>
	</form>
</body>
</html>
