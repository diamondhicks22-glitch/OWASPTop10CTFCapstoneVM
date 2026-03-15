			<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					$username = trim($_POST['username'] ?? '');
					$flag_found = '';
					if ($username === 'admin') {
						$errormessage = "<p>ERROR: Incorrect password for username " . $username . "</p><br>";
					}
					elseif (empty($username)) {
						$errormessage = "<p>Please enter a value</p>";
					}
					else {
						$errormessage = "<p>ERROR: Username " . $username . "not found.";
					}
				}
				echo "<div class = 'error'>";
				error_log("Failed login attempt for username: $username");
				die("Incorrect username or password");
				echo "</div>";
			?>

