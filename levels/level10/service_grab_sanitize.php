<?php
header('Content-Type: application/json');


	$stmt = "SELECT service_name, status FROM service_status WHERE service_name LIKE '%$servicename%'";
	$result = $connection->query($stmt);


}
?>
