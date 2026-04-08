<?php
header('Content-Type: application/json');

$account_id = $_POST['accountID'] ?? '';
if ($account_id === '') {
	$account_id = 1;
}
if (is_numeric($account_id)) {
	$stmt = $connection->prepare("SELECT * FROM users WHERE account_id = ?");
	$stmt -> bind_param("i", $account_id); //here
	$stmt -> execute();
	$result = $stmt->get_result();

	//json output
}

else {
	$controlledfail = $connection->query("SELECT * FROM users");
	$rows = [];

	while ($row = $controlledfail->fetch_assoc()) {
			$rows[] = $row;
	}

	echo json_encode ([
		"status" => "fail",
		"data" => $rows
	]);
}
?>
