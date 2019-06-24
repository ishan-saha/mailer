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

				<!-- Intro -->
					<div id="intro">
						<h1>Mailer with a Tracer</h1>
						<ul class="actions">
							<li><a href="#main" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="index.php">Mailer</a></li>
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
									<p>This mailer uses PHPMailer to send HTML email with attachments and also trackes if the mail is opened and the ip address of the target as well. The HTML template used is Massively by HTML5 UP.</p>
								</header>
								<table>
								<form method="post" action="script.php" enctype="multipart/form-data">
									<tr>
										<td>
											<h4>Name</h4>
										</td>
										<td>
											<div class="field">
												<input type="text" name="name" id="name" required />
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<h4>Sender Email</h4>
										</td>
										<td>
											<div class="field">
												<input type="text" name="sender" id="sender" required pattern="[a-z0-9._]+@[a-z0-9.-]+\.[a-z]{2,}$"  />
											</div>		
										</td>
									</tr>
									<tr>
										<td>
											<h4>Target Email</h4>
										</td>
										<td>
											<div class="field">
												<input type="text" name="target" id="target" required pattern="[a-z0-9._]+@[a-z0-9.-]+\.[a-z]{2,}$" />
											</div>		
										</td>
									</tr>
									<tr>
										<td>
											<h4>Subject</h4>
										</td>
										<td>
											<div class="field">
												<input type="text" name="subject" id="subject" required />
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<h4>Message</h4>
										</td>
										<td>
											<div class="field">
												<textarea name="message" id="message" rows="5"></textarea>
											</div>		
										</td>
									</tr>
									<tr>
										<td>
											<div class="upload-btn-wrapper">
											  <button class="btn">Upload a file</button>
											  <input type="file" name="attachment" />
											</div>
										</td>
										<td class="action">
											<button class="button special fit big">Send Mail</button>
										</td>
									</tr>
								</form>
							</table>
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