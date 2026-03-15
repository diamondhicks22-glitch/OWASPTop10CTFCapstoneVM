<?php
						if ($_SERVER['REQUEST_METHOD'] == 'POST') {
						$response = '';
						$quote = 0;
						$quantity = $_POST['quantity'] ?? '';

						try {
							if ($quantity === '') {
								throw new Exception("Enter a value");
							}
							elseif (!ctype_digit($quantity)) {
								throw new Exception("Invalid quantity. ERROR");
							}
							elseif ((int)$quantity === 0) {
								throw new Exception("Enter a number");
							}

							else {
								$quote = $quantity * 1000;
								$response = '<p>Your quote is: $' . $quote . "</p>";
						}
						}
						catch (Exception $e) {
							$response = "<label class='error'>Exception caught: ". $e->getMessage() . "</label>";
						}
					}
			?>

