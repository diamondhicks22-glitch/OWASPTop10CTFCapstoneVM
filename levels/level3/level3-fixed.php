<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					$number = trim($_POST['number'] ?? '');
					$flag_found = '';
					if (preg_match('/\D/', $number)) {
						error_log('Attempted input:' . $number . '.') //Optional but good practice for forensics
						die("<p>Please enter a number</p>");
					}
					elseif (empty($number)) {
						die("<p>Please enter a value</p>");
					}
				}
			?>
