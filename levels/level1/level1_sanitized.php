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
			<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					$username = trim($_POST['username'] ?? '');
					$flag_found = '';
					if ($username === 'admin') {
						$errormessage = "<p>ERROR: Incorrect password for username " . $username . "</p><br>";
						$flag_found = "<p>Code: B8dl0g</p>";
					}
					elseif (empty($username)) {
						$errormessage = "<p>Please enter a value</p>";
					}
					else {
						$errormessage = "<p>ERROR: Username " . $username . "not found.";
					}
				}
				echo "<div class = 'error'>";
				echo $errormessage;
				if (!empty($flag_found)) {
					echo $flag_found;
				}
				echo "</div>";
			?>

</main>
</body>
</html>
