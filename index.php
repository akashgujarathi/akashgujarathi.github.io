<?php

if($_POST["submit"]) {
    $recipient="agujara1@binghamton.edu";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $mailBody, "From: $sender <$senderEmail>");
}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Akash Gujarathi</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">Welcome</a></li>
							<li><a href="#one">Education</a></li>
							<li><a href="#two">Publication & Projects</a></li>
							<li><a href="#three">Get in touch</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>Akash Gujarathi</h1>
							<p>IT intern at International Student and Scholars Services, Binghamton University.<br>
							<i>Master's of Science in Computer Science</i>, Graduating May 2020</p>
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">
						<section>
							<a href="#" class="image"><img src="images/pic01.jpg" alt="" data-position="center center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Binghamton University, State University of New York</h2>
									<p> Master's in Science Computer Science <br> GPA: 3.76</p>
										<li>High Performance Computing</li>
										<li>Data Mining</li>
										<li>Design and Analysis of Algorithms</li>
										<li>Operating Systems</li>
										<li>Programming Languages</li>
										<li>Computer Architecture</li>	
									
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="images/pic02.jpg" alt="" data-position="top center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Savitribai Phule Pune University</h2>
									<p>Bachelor's of Engineering in Information Technology <br> Grade: First Class with Distinction</p>
									<ul>	
										<li>Advance Database Management Systems</li>
										<li>Distributed Systems</li>
										<li>Artificial Intelligence</li>
										<li>Machine Learning</li>
										<li>Web Technologies</li>
										<li>System Programing</li>	
									</ul>
								</div>
							</div>
						</section>


				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<div class="features">
								<section>
									<span class="icon major fa-desktop"></span>
									<h3><a href="https://doi.org/10.1007/978-981-10-7868-2_23">Competent K-means for Smart and Effective E-commerce</a></h3>
									<p>Springer Nature Singapore Pte Ltd. 2018S. S. Dash et al. (eds.), Artificial Intelligence and Evolutionary Computationsin Engineering Systems, Advances in Intelligent Systems and Computing 668</p>
								</section>
								<section>
									<span class="icon major fa-code"></span>
									<h3><a href="https://github.com/akz-9/Branch-Predictor-Simulator/tree/master"> Branch predictor simulator</a></h3>
									Created 3 branch predictors 
										<ul>
											<li>Bimodal Predictor</li>
											<li>Gshare Predictor</li>
											<li>Hybrid Predictor</li>
										</ul>     
								</section>
								<section>
									<span class="icon major fa-code"></span>
									<h3><a href="https://github.com/akz-9/Named-Pipe-for-Exchanging-Numbers"> Named pipes for Exchanging Numbers</a></h3>
									<p>
										<ul>
											<li>Implemented a kernel level named pipe </li>
											<li>Achieved concurrency between all processes using semaphores</li>	
										</ul>     
									</p>	
								</section>
								<section>
									<span class="icon major fa-code"></span>
									<h3><a href="https://github.com/akz-9/Time-Series-Data-Trend-Prediction"> Time Series Data Trend Prediction</a></h3>
									<p>
										<ul>
											<li>Developed system using an ARIMA model </li>
											<li>Predicted sales quantity of 100 products for 46 days, exploiting past data of 118 days </li>
											<li>Achieved resulted average RMSE value 31.54</li>	
										</ul>     
									</p>	
								</section>
								<section>
									<span class="icon major fa-code"></span>
									<h3><a href="https://github.com/akz-9/Mini-Shell"> Mini Shell in C</a></h3>
									<p>
										<ul>
											<li>Created a UNIX shell in C</li>
											<li>Runs & controls binary executable in foreground and background mode</li>
											<li>Managed orphan & zombie process and any feasible combination of input and output redirection and filters </li>	
										</ul>     
									</p>	
								</section>
								<section>
									<span class="icon major fa-code"></span>
									<h3><a href="https://github.com/akz-9/BullCowGame"> Bulls and Cows Game</a></h3>
									<p>
										<ul>
											<li>Designed and developed a single user bulls and cows guessing the isogram game</li>
										</ul>     
									</p>	
								</section>
							</div>
						</div>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style1 fade-up">
						<div class="inner">
							<div class="split style1">
								<section>
									<form method="post" action="index.php">
										<div class="fields">
											<div class="field half">
												<label for="name">Name</label>
												<input type="text" name="name" id="name" />
											</div>
											<div class="field half">
												<label for="email">Email</label>
												<input type="text" name="email" id="email" />
											</div>
											<div class="field">
												<label for="message">Message</label>
												<textarea name="message" id="message" rows="5"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><a href="#" class="button submit" name ="submit">Send Message</a></li>
										</ul>
									</form>
								</section>
								<section>
									<ul class="contact">
										<li>
											<h3>Address</h3>
											<span>209 Main Street, Apt #1E<br />
											Binghamton, NY 13905<br />
											USA</span>
										</li>
										<li>
											<h3>Email</h3>
											<a href="mailto:agujara1@binghamton.edu">agujara1@binghamton.edu</a>
										</li>
										<li>
											<h3>Phone</h3>
											<span>(607) 304-1392</span>
										</li>
										<li>
											<h3>Social</h3>
											<ul class="icons">
												<li><a href="https://github.com/akz-9" class="fa-github"><span class="label">GitHub</span></a></li>
												<li><a href="https://www.linkedin.com/in/akashgujarathi" class="fa-linkedin"><span class="label">LinkedIn</span></a></li>
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>Last update: 04/17/2019, Version: v0.1</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>