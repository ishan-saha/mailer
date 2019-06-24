<?php
require "config.php";

try{
	if(isset($_GET['m']))
	{
		$id=$_GET['m'];
		$date = date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);
		$ip = $_SERVER['REMOTE_ADDR'];

		$dbh = new PDO($dbconnection,$dbuser, $dbpass,$options);
		$sql = "UPDATE `tracker` SET `ip` = '".$ip."', `status` = 1,`OPEN` = '".$date."' WHERE `id` ='".$id."'";
		$statement = $dbh->prepare($sql);
		$statement->execute();
	}
}
catch (PDOException $e)
{
	echo "<br>[*]Error : " . $e->getMessage() . "<br>";
	die();
} 
header('Content-Type: image/gif');
		readfile('ok.gif');
?>
