<?php 
require "config.php";

$dbh = new PDO($dbconnection,$dbuser, $dbpass,$options);
$query = "SELECT * FROM tracker order by ?";
$statement = $dbh->prepare($query);
$statement->execute(['id']);
$result = $statement->fetchAll();
$total_row = $statement->rowCount();

?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Tracker</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
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
							<li class="active"><a href="tracker.php">Tracker</a></li>
							
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="https://github.com/ishan-saha" class="icon fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>
				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">
							
							<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>IP Address</th>
													<th>Sender Email</th>
													<th>Target Email</th>
													<th>Time Stamp</th>
												</tr>
											</thead>
											<tbody>
												<?php 
												$output='';
													if ($total_row>0) {
														foreach ($result as $row) {
															echo "<tr>";
															
															if (is_null($row['status'])) {
																$output.="<td class='button special disabled'>Not TRACKED</td>";
															}
															else {
																$output.= "<td class='button special'>".$row['ip']."</td>";
															}
															$output.="<td>".$row['Sender']."</td><td>".$row['Target']."</td><td>".$row['OPEN']."</td></tr>";	

														}
														
													}
													else{
														$output='<td colspan="4" align="center">No Email Tracker Data Found!!!</td>';
													}
													echo $output;

												?>
											</tbody>
										</table>
									</div>
							</section>
					</div>
					
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