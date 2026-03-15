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
			<input type="hidden" name="level_id" value="3">
			<input type="hidden" name= "level_folder" value= "levels/level3">
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
		<p>For a quote please enter server or system amount below.</p>
		</div>
		
			<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					$number = trim($_POST['number'] ?? '');
					$flag_found = '';
					$flag = '';
					if (preg_match('/\D/', $number)) {
						$errormessage = "<p>ERROR: Input contains invalid characters</p>";
						$flag_found = "<p>Code: ";
						$flag = "<span class='flag-text'>S@n1tiz3</span></p>";

					}
					elseif (empty($number)) {
						$errormessage = "<p>Please enter a value</p>";
					}
					else {
						$errormessage = 1000 * $number;
					}
				}
			?>

		<div class="login-box">
			<form method="POST" action="level3.php">
				<label>Servers/Computer Amount</label>
				<input type="text" name="number">
				<br>
				<button type="submit">Submit</button>
			</form>
			<?php
				echo "<div class = 'error'>";
				if  (is_int($errormessage)) {
					echo "$$errormessage";
				}
				else {
					echo $errormessage;
				}
				if (!empty($flag_found)) {
					echo $flag_found;
					echo $flag;
				}
				echo "</div>";i
			?>
		</div>
