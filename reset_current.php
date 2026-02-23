<?php
include ".connect.php";

$query = $connection->prepare("UPDATE 2025_levels SET completed = FALSE");
$query->execute();

$page = "index.php";
header("Location: $page");
exit;
?>
