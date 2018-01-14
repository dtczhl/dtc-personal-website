<!DOCTYPE html>
<html>

	<head>
		<title> Huanle Zhang's Personal Website </title>
		
		<meta charset="UTF-8">
		<meta name="description" content="Resources">
		<meta name="keywords" content="Huanle Zhang, Resources">
		<meta name="author" content="Huanle Zhang">
		<meta http-equiv="refresh" content="60"> <!-- refresh every 60s -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="shortcut icon" href="favicon.ico" /> <!-- Icon -->
		
		<link rel="stylesheet" href="css/theme.css" />
		<link rel="stylesheet" href="css/header.css" />
		<link rel="stylesheet" href="css/footer.css" />
		
		<link rel="stylesheet" href="css/resources.css" />
		<link rel="stylesheet" href="css/donation.css" />
		
		<script src="js/jquery-3.2.1.js"></script>
		<script src="js/icon_bind.js"></script> 
		
	</head>
	
	<body>
		
		<?php include 'header.php'; ?>
		<?php include 'donation.php'; ?>
		
		<!-- class names are confusing. E.g, android_***. Need fix someday -->
		
		<section id="content_start">
			<h1 class="android_title header_title"> Android </h1>
			<ul class="android_list bar_top">
				
				<li>
					<span class="project_name"> Frequency Player </span>
					<span class="project_description"> Emitting sounds with specified frequencies </span>
					<a href="https://github.com/dtczhl/frequency-player.git" target="_blank" ref="author" class="github"></a>
				</li>
				
				<li>
					<span class="project_name"> Doppler Illustrator </span>
					<span class="project_description"> Illustrating Doppler effect using sounds </span>
					<a href="https://github.com/dtczhl/doppler-illustrator.git" target="_blank" ref="author" class="github"></a>
				</li>
				
				<li>
					<span class="project_name"> Acoustic Spectrumer </span>
					<span class="project_description"> Showing spectrum of ambient sounds </span>
					<a href="https://github.com/dtczhl/acoustic-spectrumer.git" target="_blank" ref="author" class="github"></a>
				</li>
				
			</ul>
		</section>
		
		<section>
			<h1 class="android_title header_title"> Website </h1>
			<ul class="android_list bar_top">
				
				<li>
					<span class="project_name"> Website Template </span>
					<span class="project_description"> Source code of my <span style="color: DarkMagenta;">Ugly</span> website :) </span>
					<a href="https://github.com/dtczhl/Personal-website.git" target="_blank" ref="author" class="github"></a>
				</li>
				
			</ul>
		</section>
		
		<section>
			<h1 class="android_title header_title"> Systems </h1>
			<ul class="android_list bar_top">
				<li>
					<span class="project_name"> Bare Metal OS </span>
					<span class="project_description"> Useful for strict time-control research projects (adapted from ECS 251) </span>
					<a href="https://github.com/dtczhl/raspberry-bare-metal" target="_blank" ref="author" class="github"></a>
				</li>
		</section>	
		
		<section>
			<h1 class="android_title header_title"> Tools </h1>
			<ul class="android_list bar_top">
				<li>
					<span class="project_name"> IP Uploader </span>
					<span class="project_description"> Upload and show your IPs on this website </span>
					<a href="https://github.com/dtczhl/dtc-show-ip.git" target="_blank" ref="author" class="github"></a>
				</li>
		</section>
		
		<!-- Use icons from Internet. Below are the credits. -->
		<div class="hide_credit">
		</div>
		
		<?php include 'footer.php'; ?>
		
	</body>

</html>