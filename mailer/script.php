<!DOCTYPE HTML>
<html>
	<head>
		<title>Mailer</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/custom.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">
				<header id="header">
					</header>	

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li><a href="index.php">Mailer</a></li>
							<li><a href="tracker.php">Tracker</a></li>
				
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="https://github.com/ishan-saha" class="icon fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>

					<div id="main">
							<article class="post featured">
								<header class="major">
									<p>If the button is disabled then the tracker won't work!</p>
								</header>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require "config.php";

if(isset($_POST['name'])&& isset($_POST['sender'])&&isset($_POST['target'])&&isset($_POST['subject'])&&isset($_POST['message']))
{
//init elements 
$mail = new PHPMailer();

$mail->From = $_POST['sender'];
$mail->FromName = $_POST['name'];
$mail->addAddress($_POST['target']); 
$mail->isHTML(true);

//checking for attachment 
if (isset($_FILES['attachment'])) {

	$mail->addAttachment($_FILES['attachment']['tmp_name'], $_FILES['attachment']['name']);
}

//setting up mail body
$mail->Subject = $_POST['subject'];
//this is the id for tracking and database management purpose
$digest=md5(date('a').$_POST['sender'].$_POST['subject']);
$mail->Body = $_POST['message']."<img src='".$baseurl."img.php?m=".$digest." alt=''>";

if(!$mail->send()) 
{
    echo '<a class="button fit special disabled" href="#">' . $mail->ErrorInfo.'</a>';
} 
else 
{
	$dbh = new PDO($dbconnection,$dbuser, $dbpass,$options);
    $sql = "INSERT INTO `tracker` (`id`,`Sender`,`Target`) VALUES ('".$digest."','".$_POST['sender']."','".$_POST['target']."')";
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
}

?>
</article>
					</div>

				<!-- Footer -->
					<footer id="footer">
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>Ishan Saha: <a href="mailto:ishansaha@outlook.com">Ishansaha@outlook.com</a></li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li><li>Distributor: <a href="https://themewagon.com">ThemeWagon</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>