<?php
require_once __DIR__ . "/.connect.php";
header('Content-Type: application/json');

$level_id = $_GET['level_id'] ?? -1;
$hint_number = $_GET['hint_number'] ?? 1;

$query = $connection->prepare("SELECT hintText FROM level_hints WHERE level_id = ? AND hint_number = ?");

$query->bind_param("ii", $level_id, $hint_number);
$query->execute();
$result = $query->get_result();
$row = $result->fetch_assoc();

echo json_encode([
	"hint" => $row['hintText']
]);

