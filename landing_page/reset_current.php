<?php
require_once __DIR__ . '/../secure_assets/.connect.php';

$query = $connection->prepare("UPDATE 2025_levels SET completed = FALSE");
$query->execute();

echo "success";
?>
