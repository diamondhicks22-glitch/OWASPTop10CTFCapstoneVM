<?php
require_once __DIR__ . '/../../secure_assets/.connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OWASP-Inspired CTF Site</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/../../secure_assets/sitecss.css">
</head>

<body>
	<header>
	</header>

	<main>
		<h1>Securissima Company</h1>
		
			<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					$username = $_POST['username'] ?? '';
					if (empty($username)) {
						echo "<p>Enter a username.<p>";
					}
					else {
						$query = $connection->prepare("SELECT * FROM insecure_users WHERE username = ?");
						$query->bind_param("s", $username);
						$query->execute();
						$result = $query->get_result();

						if ($result->num_rows === 0) {
							echo "<p> Username not found </p>";
						}
						else {
							while ($row = $result->fetch_assoc()) {
								echo "<p>" . $row['username'] . " | " . $row['pass'] . "</p>";
							}
						}
					}
				}
			?>

		<div class="log-in_box">
			<form method="POST" action="forgot_password.php">
				<p>Username</p><br>
				<input type="text" name="username">
				<button type="submit">Submit</button>
			</form>
			<a href="level4.php">Return to level page</a>
		</div>
