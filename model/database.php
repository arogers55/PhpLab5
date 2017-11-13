<?php
    $dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
    $username = 'mgs_user';
    $password = 'pa55word';
	$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
/*
	function get_connection()
	{
		$db = new PDO($dsn, $username, $password, $options);
		return $db;
	}
	// put index.php if statemnts in a try block and add the catch block from below underneath it. 
*/
	
 //   try {
        $db = new PDO($dsn, $username, $password, $options);
  /*} catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }*/
?>