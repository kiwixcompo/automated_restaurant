<?php 
	try {
	$pdo = new PDO('mysql:host=localhost;dbname=restaurant', 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "UTF8"');
} catch (PDOException $e) {
	echo "Unable to connect to the database";
	$e->getMessage();
	exit();
}