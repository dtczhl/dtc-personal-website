<!DOCTYPE html>
<html>

	<head>
		<title> Huanle Zhang's Personal Website </title>

		<meta charset="UTF-8">
		<meta name="description" content="Gallery">
		<meta name="keywords" content="Huanle Zhang, Publications">
		<meta name="author" content="Huanle Zhang">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="shortcut icon" href="favicon.ico" /> <!-- Icon -->

		<link rel="stylesheet" href="css/theme.css" />
		<link rel="stylesheet" href="css/header.css" />
		<link rel="stylesheet" href="css/footer.css" />

		<link rel="stylesheet" href="css/gallery.css" />

		<script src="js/jquery-3.2.1.js"></script>
    <script src="js/dtc-web-audio-frequency.js"></script>

	</head>

	<body>

		<?php include 'header.php'; ?>

<div class="main_wrapper">

	<section id="content_start" style="width:600px;margin-bottom:50px;">
      <p> <scan style="color:red;"> Noise Alert! </scan> The nominal human hearing range is [20 Hz, 20 KHz]. However, when getting older, we are gradulay losing the ability to hear high-frequency sounds. Try it to see what is the highest frequency that you can still hear now :( </p>
      <input type="range" min="1" max="20000" value="1" class="slider" id="freqSlider" style="width:80%;">
      <p> Audio Frequency (Hz): <scan id="freqValue">-0</scan> </p>
      <button type="button" onclick="dtcWebAudioFrequencyPlayEnable()" id="freqStart"> Start </button>
      <button type="button" onclick="dtcWebAudioFrequencyPlayDisable()" id="freqStop" disabled> Stop </button>
    </section>

    <?php include 'footer.php'; ?>

  </body>

</html>
