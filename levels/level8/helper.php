<?php
require_once __DIR__ . '/../../secure_assets/.connect.php';
header('Content-Type: application/json');

$complaint = $_POST['complaint'] ?? '';
$timestamp = date("Y-m-d H:i:s");
if ($complaint === '') {
	echo json_encode ([
		"status" => "nothing",
		"data" => "Must not be empty"
	]);
}
else {
	file_put_contents("notice.txt", "Status OK\n$complaint\nTimestamp:$timestamp\nNotice: \${Bl1nd_Tr5\$t}");
	echo json_encode([
		"status" => "sent",
		"data" => "Complaint logged in notice.txt"
	]);
}
?>
