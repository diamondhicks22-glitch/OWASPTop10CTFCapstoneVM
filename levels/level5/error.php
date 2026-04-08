<?php
header("Content-Type: application/json");

	$response = '';
	$quote = 0;
	$quantity = $_POST['quantity'] ?? '';

	try {
		if ($quantity === '') {
			throw new Exception("Enter a value");
		}
		elseif (!ctype_digit($quantity)) {
			throw new Exception("Invalid quantity. ERROR: <label class='flag-text'>\${Try_c@t3h}</label>");
			}
		elseif ((int)$quantity === 0) {
			throw new Exception("Enter a number");
			}

		else {
			$quote = $quantity * 1000;
			$response = 'Your quote is: $' . $quote;
			}
		}
		catch (Exception $e) {
			$response = "Exception caught: ". $e->getMessage();
		}

	echo json_encode ([
		"data" => $response
	]);
?>
