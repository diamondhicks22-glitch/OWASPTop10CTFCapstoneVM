<?php
require_once __DIR__ . "/.connect.php";
header('Content-Type: application/json');

$level = isset($_POST['level_id']) ? intval($_POST['level_id']) : -1;
$flag = isset($_POST['flag']) ? trim($_POST['flag']) : '';
$file_loc = $_POST['level_folder'] ?? '/../index.php';
$back = $_POST['level_page'];
$education_page = "lesson_" . $level . ".php";

if ($level <= -1 || empty($flag)) {
	header("Location: $back");
	exit;
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
	echo json_encode([
		"status" => "success",
		"redirect" => "lesson_" . $level . ".php"
	]);
}
else {
	if ($file_loc === '/../index.php') {
	echo json_encode([
		"status" => "jump",
		"redirect" => "/.." . $file_loc . ""
	]);

	}
	else{
		echo json_encode([
			"status" => "fail",
			"message" => "Incorrect flag"
	]);

	}
}
?>
