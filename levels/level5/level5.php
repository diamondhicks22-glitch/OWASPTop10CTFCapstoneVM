<?php
require_once __DIR__ . '/../../secure_assets/.connect.php';
session_start();
if (!isset($_SESSION['landing_transition']) && !isset($_SESSION['level_transition'])) {
	header("Location: ../../index.php");
	exit();
}
session_unset();
session_destroy();
session_start();
$_SESSION['level_transition'] = true;
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

<body>
	<header class= "company-header">
		<span class="fake-company">Securissima Company</span>
		<form method="POST" action="/../../secure_assets/flag_check.php">
			<input type="hidden" name="level_id" value="5">
			<input type="hidden" name= "level_folder" value= "levels/level5">
			<input type ="hidden" name="level_page" value="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" name="flag" class="flag-text-input" placeholder="Enter Flag">
			<button type="submit" class="button level">Submit Flag</button>
		</form> 
	</header>



	<main>
		<div class ="fluff-text">



		<p>Securissima focuses on providing our clients with the most up-to-date and secure information to better secure their customers.
		In the age where technology is everything, securing your assets from attackers and threats becomes the up-most-priority. We provide 
		pen-testing, consultations, framework and policy reviews, and much more. </p>
		
		<br>
		<p>For a limited time, we are offering free quotes below! Feel free to enter a number of devices within your company. Afterwards,
		if you are interested, call us at +X (XXX) XXX-XXXX.</p>
		
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
								throw new Exception("Invalid quantity. ERROR: <label class='flag-text'>\${Try_c@t3h}</label>");
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
		</div>
		<div class="quote-box">
			<form method="POST" action="level5.php">
				<label>How many servers/cameras in your company?</label><br>
				<input type="text" name="quantity">
			</form>
			<?php
			echo $response;
			?>
		</div>
