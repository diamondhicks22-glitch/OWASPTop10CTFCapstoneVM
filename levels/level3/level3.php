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
			<input type="hidden" name="level_id" value="3">
			<input type="hidden" name= "level_folder" value= "levels/level3">
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
		<p>For a quote please enter your number below.</p>
		
			<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					$number = trim($_POST['number'] ?? '');
					$flag_found = '';
					if (preg_match('/\D/', $number)) {
						$errormessage = "<p>ERROR: Input contains invalid characters</p>";
						$flag_found = "<p>Code: S@n1tiz3</p>";
					}
					elseif (empty($number)) {
						$errormessage = "<p>Please enter a value</p>";
					}
					else {
						$errormessage = "";
					}
				}
			?>

		<div class="log-in_box">
			<form method="POST" action="level3.php">
				<p>Contact</p><br>
				<input type="text" name="number">
				<br>
				<button type="submit">Submit</button>
			</form>
			<?php
				echo "<div class = 'error'>";
				echo $errormessage;
				if (!empty($flag_found)) {
					echo $flag_found;
				}
				echo "</div>";
			?>
		</div>
