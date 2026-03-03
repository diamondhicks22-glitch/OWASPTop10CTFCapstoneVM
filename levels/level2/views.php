<?php

$view = $_GET['view'] ?? 'guest';

if ($view === 'guest') {
	echo "<p>Guest portal still under construction</p>";
	echo "<a href='level2.php'>Return to main page</a>";
}
elseif ($view === 'admin') {
	echo "<p> Some admin blurb </p>";
	echo "<p> UR1_m@nIp </p>";
}

else {
	header("Location: level2.php");
}
?>
