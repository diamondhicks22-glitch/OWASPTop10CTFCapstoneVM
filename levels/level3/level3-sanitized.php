			<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					$number = trim($_POST['number'] ?? '');
					if (preg_match('/\D/', $number)) {
						$errormessage = "<p>ERROR: Input contains invalid characters</p>";
						$flagfound = true;
					}
					elseif (empty($number)) {
						$errormessage = "<p>Please enter a value</p>";
					}
					else {
						$errormessage = "";
					}
				}
			?>
