
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
				echo $errormessage;
				if (!empty($flag_found)) {
					echo $flag_found;
				}
				echo "</div>";
			?>

