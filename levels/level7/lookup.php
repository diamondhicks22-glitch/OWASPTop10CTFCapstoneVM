<?php
require_once __DIR__ . '/../../secure_assets/.connect.php';
header('Content-Type: application/json');

$account_id = $_POST['account_id'] ?? '';
if ($account_id === '') {
	$account_id = 1;
}
if (is_numeric($account_id)) {
	$stmt = $connection->prepare("SELECT * FROM crypto_users WHERE accountID = ?");
	$stmt -> bind_param("i", $account_id);
	$stmt -> execute();
	$result = $stmt->get_result();

	if ($result->num_rows > 0) {
		$rows = [];
		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}

		echo json_encode([
			"status" => "success",
			"data" => $rows
		]);
	}
	else {
		echo json_encode ([
			"status" => "not_found",
			"data" => []
		]);
	}
}

else {
	$controlfail = $connection->query("SELECT * FROM crypto_users");
	$rows = [];

	while ($row = $controlfail->fetch_assoc()) {
			$rows[] = $row;
	}

	echo json_encode ([
		"status" => "fail",
		"data" => $rows
	]);
}
?>
