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
			<div id="wrapper">
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
									<strong>Before running this instillation you should change the values of the constants in the config file. </strong>
								</header>

<?php
require "config.php";

try{
	$dbh = new PDO("mysql:host=$dbhost", $dbuser, $dbpass,$options);
	$query=file_get_contents('sql_create.sql');
	echo $dbh->exec($query);
	echo "<h2>[*]Database creation succes <br> [*]Table creation success!!</h2>";
}
catch (PDOException $e)
{
	echo "<h2>Error : " . $e->getMessage() . "</h2>";
	die();
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