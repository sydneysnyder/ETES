<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
$database_options = array(PDO::ATTR_EMULATE_PREPARES => false,
						  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
						  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
try {
	
	$database = new PDO('mysql:host=localhost;dbname=etes; charset=utf8',
						'root', '', $database_options); 
     /*
	$database = new PDO('mysql:host=us-cdbr-iron-east-03.cleardb.net;dbname=heroku_420315aa5db7b23; charset=utf8',
						'b232050fd3da99', '591faf03', $database_options);
                        */
} catch(PDOException $e) {
	echo 'ERROR: ' . $e->getMessage();
}
?>