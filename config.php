<?php

require("inc/db_conn.php");

try {
	$db = new PDO(DB_DSN , DB_USERNAME, DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'utf8'");
} catch (Exception $e) {
	echo "Could not connet to the database.";
	exit;
}




















?>