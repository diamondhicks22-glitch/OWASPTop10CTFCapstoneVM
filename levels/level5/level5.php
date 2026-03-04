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
		<!--ADD NAV HERE-->
		<form method="POST" action="/../../secure_assets/flag_check.php">
			<input type="hidden" name="level_id" value="5">
			<input type="hidden" name= "level_folder" value= "levels/level5">
			<input type ="hidden" name="level_page" value="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" id="flag" name="flag" value="Enter Flag">
			<button type="submit">Submit Flag</button>
		</form> 
	</header>

	<main>
		<h1>Securissima Company</h1>

		<p>Securissima focuses on providing our clients with the most up-to-date and secure information to better secure their customers.
		In the age where technology is everything, securing your assets from attackers and threats becomes the up-most-priority. We provide 
		pen-testing, consultations, framework and policy reviews, and much more. </p>
		
		<br>
		<p>To access our services, please log-in below.</p>
		<p>NOTICE: Due to maintenance, we are currently not accepting new clients. We hope to be able to take more very soon!</p>
		
			<?php
					if ($_SERVER['REQUEST_METHOD'] == 'POST') {
						$quote = 0;
						$quantity = $_POST['quantity'] ?? '';

						try {
							if ($quantity === '') {
								throw new Exception("Enter a value");
							}
							elseif (!ctype_digit($quantity)) {
								throw new Exception("Invalid quantity.");
							}
							elseif ((int)$quantity === 0) {
								throw new Exception("Invalid quantity. \${Try_c@t3h}");
							}

							else {
								$quote = $quantity * 1000;
								echo '<p>Your quote is: $' . $quote . "</p>";
						}
						}
						catch (Exception $e) {
							echo "<p>Exception caught: ". $e->getMessage() . "</p>";
						}
					}
			?>

		<div class="quote_box">
			<form method="POST" action="level5.php">
				<p>How many servers/cameras in your company?</p><br>
				<input type="text" name="quantity">
			</form>
		</div>
