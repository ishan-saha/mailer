<?php
$baseurl="yourdomain.com";
$dbhost ='localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbname = "mailer";
$dbconnection = "mysql:host=$dbhost;dbname=$dbname"; 
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

?>