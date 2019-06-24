<?php
require "config.php";

if(isset($_POST['name']))
{
//init elements 
	$dbh = new PDO($dbconnection,$dbuser, $dbpass,$options);
    $sql = "INSERT INTO `test` (`id`) VALUES ('".$_POST['name']."')";
	$statement = $dbh->prepare($sql);
	  if($statement->execute())
	  {
	   $message = '<a class="button special" href="tracker.php">Email Send Successfully</a>';
	  }
	 else
	 {
	  $message = '<a class="button special disabled" href="#">Email Send Successfully</a>';
	 }
	 echo $message ;

}

?>