<?php
require_once __DIR__ . '/../../secure_assets/.connect.php';
session_start();
if (!isset($_SESSION['level_transition'])) {
	header("Location: ../../index.php");
	exit();
}
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
	<header class= "company-header">
		<span class="fake-company">Securissima Company</span> 
	</header>


	<main>	
			<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					$username = $_POST['username'] ?? '';
					$response = '';
					if (empty($username)) {
						$response = "<p>Enter a username.<p>";
					}
					else {
						$query = $connection->prepare("SELECT * FROM insecure_users WHERE username = ?");
						$query->bind_param("s", $username);
						$query->execute();
						$result = $query->get_result();

						if ($result->num_rows === 0) {
							$response = "<p> Username not found </p>";
						}
						else {
							while ($row = $result->fetch_assoc()) {
								$response = "<p>" . $row['username'] . " | " . $row['pass'] . "</p>";
							}
						}
					}
				}
			?>

		<div class="login-box">
			<form method="POST" action="forgot_password.php">
				<label>Username</label>
				<input type="text" name="username">
				<button type="submit">Submit</button>
			</form>
			<a href="level4.php">Return to level page</a>

			<?php
			echo $response;
			?>
		</div>
