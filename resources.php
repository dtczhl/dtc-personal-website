<?php
/*
	require "libs/Mobile_Detect.php";
	$mobileDetect = new Mobile_Detect;
	if ( $mobileDetect->isMobile() && !$mobileDetect->isTablet() ) {
		header('Location: mobilePhone.php');
		exit();
	}
	*/
?>

<!DOCTYPE html>
<html>

	<head>
		<title> Huanle Zhang's Personal Website </title>

		<meta charset="UTF-8">
		<meta name="description" content="Resources">
		<meta name="keywords" content="Huanle Zhang, Resources">
		<meta name="author" content="Huanle Zhang">
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
		<!-- <?php include 'donation.php'; ?>  -->

		<!-- class names are confusing. E.g, android_***. Need fix someday -->

		<section id="content_start">

			<h1 class="android_title"> Android </h1>

			<div class="android_block_wrapper">
					<div class="android_block_left">
						<span class="android_project_name"> BLE Learning </span>
					</div>
					<div class="android_block_middle">
						<span class="android_project_description"> Beginner codes for BLE applications </span>
					</div>
					<div class="android_block_right">
						<a class="android_link" href="https://github.com/huanlezhang1342/dtc-android-ble" target="_blank" rel="author"> GitHub </a>
					</div>
			</div>

			<div class="android_block_wrapper">
					<div class="android_block_left">
						<span class="android_project_name"> Frequency Player </span>
					</div>
					<div class="android_block_middle">
						<span class="android_project_description"> Emitting sounds with specified frequencies </span>
					</div>
					<div class="android_block_right">
						<a class="android_link" href="https://github.com/huanlezhang1342/dtc-frequency-player.git" target="_blank" rel="author"> GitHub </a>
					</div>
			</div>

			<div class="android_block_wrapper">
					<div class="android_block_left">
						<span class="android_project_name"> Doppler Illustrator </span>
					</div>
					<div class="android_block_middle">
						<span class="android_project_description"> Illustrating Doppler effect using sounds </span>
					</div>
					<div class="android_block_right">
						<a class="android_link" href="https://github.com/huanlezhang1342/dtc-doppler-illustrator.git" target="_blank" rel="author"> GitHub </a>
					</div>
			</div>

			<div class="android_block_wrapper">
					<div class="android_block_left">
						<span class="android_project_name"> Acoustic Spectrumer </span>
					</div>
					<div class="android_block_middle">
						<span class="android_project_description"> Showing spectrum of ambient sounds </span>
					</div>
					<div class="android_block_right">
						<a class="android_link" href="https://github.com/huanlezhang1342/dtc-acoustic-spectrumer.git" target="_blank" rel="author"> GitHub </a>
					</div>
			</div>
		</section>

		<section>
			<h1 class="web_title"> Web Development </h1>

			<div class="web_block_wrapper">
					<div class="web_block_left">
						<span class="web_project_name"> Google Citation </span>
					</div>
					<div class="web_block_middle">
						<span class="web_project_description"> Add Google citation count information to your web page </span>
					</div>
					<div class="web_block_right">
						<a class="web_link" href="https://github.com/huanlezhang1342/dtc-google-citation-helper" target="_blank" rel="author"> GitHub </a>
					</div>
			</div>

			<div class="web_block_wrapper">
					<div class="web_block_left">
						<span class="web_project_name"> This Website </span>
					</div>
					<div class="web_block_middle">
						<span class="web_project_description"> Source code of this Ugly website :) </span>
					</div>
					<div class="web_block_right">
						<a class="web_link" href="https://github.com/huanlezhang1342/dtc-personal-website.git" target="_blank" rel="author"> GitHub </a>
					</div>
			</div>
		</section>


		<section>
			<h1 class="system_title"> Systems </h1>

			<div class="system_block_wrapper">
					<div class="system_block_left">
						<span class="system_project_name"> VR WiFi Support </span>
					</div>
					<div class="system_block_middle">
						<span class="system_project_description"> Goal: High throughput, low latency WiFi system for VR applications </span>
					</div>
					<div class="system_block_right">
						<a class="system_link" href="https://github.com/huanlezhang1342/dtc-openwrt" target="_blank" rel="author"> GitHub </a>
					</div>
			</div>

			<div class="system_block_wrapper">
					<div class="system_block_left">
						<span class="system_project_name"> Bare Metal OS </span>
					</div>
					<div class="system_block_middle">
						<span class="system_project_description"> Useful for strict time-control research projects (adapted from ECS 251) </span>
					</div>
					<div class="system_block_right">
						<a class="system_link" href="https://github.com/huanlezhang1342/dtc-raspberry-bare-metal" target="_blank" rel="author"> GitHub </a>
					</div>
			</div>

		</section>



		<!-- Use icons from Internet. Below are the credits. -->
		<div class="hide_credit">
		</div>

		<?php include 'footer.php'; ?>

	</body>

</html>
