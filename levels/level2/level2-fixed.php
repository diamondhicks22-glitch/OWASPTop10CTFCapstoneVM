<?php
session_start();
if (!isset($_SESSION['session_check'])) {
	header("Location: index.php");
	exit();
}

session_start();
$_SESSION['session_check'] = true;

