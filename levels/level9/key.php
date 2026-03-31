<?php
header('Content-Type: application/json');


if (isset($_POST['javascript']) && $_POST['javascript'] === 'true') {
	echo json_encode ([
		"key" => "J@vaS_cH3c7"
	]);
}
else {
	echo json_encode ([
		"error" => "Unauthorized"
	]);
}
?>
