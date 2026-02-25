				<?php
					$username = trim($_POST['username'] ?? '');
					if ($username === 'admin') {
						echo "<div class='error'>";
						echo "<p>ERROR: Incorrect password for username " . $username . "</p><br>";
						echo "<p>Code: B8dl0g</p>";
						echo "</div>";
					}
					elseif (empty($username)) {
						echo "<div class='error'>";
						echo "<p>Please enter a value</p>";
						echo "</div>";
					}
					else {
						echo "<div class='error'>";
						echo "<p>ERROR: Username" . $username . " found.";
						echo "</div>";
					}
				?>
			
