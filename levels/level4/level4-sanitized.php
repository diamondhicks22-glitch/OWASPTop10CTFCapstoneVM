<?php
while ($row = $result->fetch_assoc()) {

	if ($row['username'] === $username) {
		$response = "<p>" . $row['username'] . " | " . $row['pass'] . "</p>";
	}
}


