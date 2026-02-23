<?php
include '.connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OWASP-Inspired CTF Site</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--ADD CSS LINK HERE-->
</head>

<body>
	<header>
		<!--ADD NAV HERE-->
	</header>

	<main>
	<h1>OWASP-Inspired CTF Site</h1>
	<p>All links are currently non-functioning while assets are being developed</p>
	<a href='base-site.php'>Introduction</a>
	<!-- <?php
	$query = $connection->prepare("SELECT completed FROM 2025_levels WHERE ID = 0");
	$query->execute();
	$result = $query->get_result();
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$complete = $row['completed'];
	}
	else{
		$complete = null;
	}
	if ($complete === null) {
		echo "Level not found";
	} elseif ($complete) {
		echo "Level completed";
	} else {
		echo "Level incomplete";
	}
?> -->
	<br>
	<a>Level1TITLE</a><br>
	<a>Level2TITLE</a><br>
	<a>Level3TITLE</a><br>
	<a>Level4TITLE</a><br>
	<a>Level5TITLE</a><br>
	<a>Level6TITLE</a><br>
	<a>Level7TITLE</a><br>
	<a>Level8TITLE</a><br>
	<a>Level9TITLE</a><br>
	<a>Level10TITLE</a><br>

	<form method="POST" action="reset_current.php">
	<button type="submit">Reset Progress</button>
	</form>
</body>
