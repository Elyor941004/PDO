<?php
	$servername = 'localhost';
	$username = 'root';
	$password = 'root';

	try {
		$conn = new PDO("mysql:host=$servername;dbname=cut-php-course", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (Exception $e) {
		echo "not connected".$e->getMessage();
	}


?>