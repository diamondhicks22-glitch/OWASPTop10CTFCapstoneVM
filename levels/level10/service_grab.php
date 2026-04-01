<?php
require_once __DIR__ . '/../../secure_assets/.connect.php';
header('Content-Type: application/json');

$servicename = $_POST['service'] ?? '';
$blocked_tables = [
	"level_archive",
	"2025_levels",
	"level_hints",
	"crypto_users",
	"insecure_users"
];
$filtered_rows = [];
if (empty($servicename)) {
	echo json_encode ([
		"foundnum" => 0,
		"data" => []
	]);
}
else {
	$stmt = "SELECT service_name, status FROM service_status WHERE service_name LIKE '%$servicename%'";
	$result = $connection->query($stmt);

	$rows = [];
	if ($result->num_rows === 0) {
		echo json_encode ([
		"foundnum" => 0,
		"data" => []
	]);
	}
	else {
		while ($row = $result->fetch_assoc()) {
			$value = $row['service_name'] ?? '';
			$skip = false;

			foreach($blocked_tables as $table) {
				if (strpos($value, $table) !== false) {
					$skip = true;
					break;
				}
			}

			if ($skip) {
				continue;
			}
			$filtered_rows[] = $row;
		}

		echo json_encode([
			"foundnum" => count($filtered_rows),
			"data" => $filtered_rows
		]);
	}
}
