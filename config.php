<?php
ini_set("display_errors", true);
date_default_timezone_set("America/Indiana/Vevay");
define ("DB_DSN", "mysql:host=localhost;dbname=zeisphoto_img");
define ("DB_USERNAME", "root");
define ("DB_PASSWORD", "root");
define ("CLASS_PATH", "classes");
define ("TEMPLATE_PATH", "templates");
define ("HOMEPAGE_NUM_ARTICLES", 5);
define ("ADMIN_USERNAME", "admin");
define ("ADMIN_PASSWORD", "mypass");


require("classes/article.php");




try {
	$db = new PDO(DB_DSN , DB_USERNAME, DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'utf8'");
} catch (Exception $e) {
	echo "Could not connet to the database.";
	exit;
}




















?>