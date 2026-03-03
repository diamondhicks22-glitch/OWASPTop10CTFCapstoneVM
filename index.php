<?php
require_once __DIR__ . '/secure_assets/.connect.php';
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
	<header>
		<h1>OWASP-Inspired CTF Site</h1>
		<p>All links are currently non-functioning while assets are being developed</p>

		<!--ADD NAV HERE-->
	</header>

	<main>
	<div class="levels">
	<?php
	$query = $connection->prepare("SELECT completed, title, location  FROM 2025_levels");
	$query->execute();
	$result = $query->get_result();
	while ($row = $result->fetch_assoc()) {
		if ($row['completed']) {
			echo "<div class='levelblock completed'>";
		}
		else {
			echo "<div class='levelblock'>";
		}
		echo "<h3>";
		echo "<a href=" . htmlspecialchars($row['location']) . ">" . htmlspecialchars($row['title']) . "</a>";
		echo "</h3>";
		echo "</div>";
	}
?>
	
	</div>
	<br><p> Still being developed </p>
	<a>Level4TITLE</a><br>
	<a>Level5TITLE</a><br>
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
