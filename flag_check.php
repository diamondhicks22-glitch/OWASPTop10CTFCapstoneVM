<?php
include ".connect.php";


$level = isset($_POST['level_id']) ? intval($_POST['level_id']) : -1;
$flag = isset($_POST['flag']) ? trim($_POST['flag']) : '';
$og_page = $_POST['level_page'] ?? 'index.php';
$education_page = "lesson_" . $level . ".php";

if ($level <= -1 || empty($flag)) {
	die("Invalid Submission");
}

$query = $connection->prepare("SELECT flag FROM level_archive WHERE ID = ?");
$query->bind_param("i", $level);
$query->execute();
$result = $query->get_result();

if ($result->num_rows === 0) {
	die("Level not found.");
	}

$row = $result->fetch_assoc();
$correct = $row['flag'];

if ($flag === $correct) {
	$update_query = $connection->prepare("UPDATE 2025_levels SET completed = TRUE WHERE ID = ?");
	$update_query->bind_param("i", $level);
	$update_query->execute();
	header("Location: $education_page");
	exit;
}
else {
	header("Location: $og_page");
	exit;
}
?>
