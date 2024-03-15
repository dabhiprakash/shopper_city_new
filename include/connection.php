<?php
	ob_start();
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "shoppercity_live";

	// Create connection
	try
	{
		$conn = new PDO('mysql:host='.$servername.';dbname='.$dbname.'','root','');
		$conn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
		die();
	}
	
	if(!defined('DIR')){
		define('DIR','http://localhost/prakash/live_project/bkp/');
	}
	if (!defined('URL')) {
		define('URL', 'http://localhost/prakash/live_project/bkp/');
	}
	include_once 'function.php';
	$user = new USER($conn);
?>