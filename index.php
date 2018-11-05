

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
		<meta name="description" content="Homepage">
		<meta name="keywords" content="Huanle Zhang, Biography, Homepage">
		<meta name="author" content="Huanle Zhang">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="shortcut icon" href="favicon.ico" /> <!-- Icon -->

		<script src="js/jquery-3.2.1.js"></script>
		<script src="js/showCourseEvaluationComments.js"></script>

		<link rel="stylesheet" href="css/theme.css" />
		<link rel="stylesheet" href="css/header.css" />
		<link rel="stylesheet" href="css/footer.css" />

		<link rel="stylesheet" href="css/home.css" />
		<link rel="stylesheet" href="css/donation.css" />

	</head>

	<body>

		<?php include 'header.php'; ?>
		<!-- <?php include 'donation.php'; ?> -->

		<section id="content_start">
			<h1 class="header_title"> Education </h1>

			<div class="edu_block_wrapper"> <!-- PHD -->
					<div class="edu_block_left">
						<span class="edu_title"> Ph.D. </span>
						<span class="edu_period"> (current) </span>
					</div>
					<div class="edu_block_right">
						<span class="edu_time"> 2016.09 - Now, </span>
						<span class="edu_research"> Computer &amp; Information Sciences </span>
						<span class="edu_institution"> University of California, Davis, USA </span>
						<span class="edu_supervisor_modifier"> Supervisor: <i>Prof.</i> </span>
						<a class="edu_supervisor_link" href="https://faculty.engineering.ucdavis.edu/mohapatra/" rel="external" target="_blank"> Prasant Mohapatra </a>
					</div>
			</div>

			<div class="edu_block_wrapper"> <!-- Master -->
				<div class="edu_block_left">
					<span class="edu_title"> M.S. </span>
					<span class="edu_period"> (3 years) </span>
				</div>
				<div class="edu_block_right">
					<span class="edu_time"> 2011.09 - 2014.06, </span>
					<span class="edu_research"> Communication &amp; Information System </span>
					<span class="edu_institution"> University of Electronic Science &amp; Technology of China </span>
					<span class="edu_supervisor_modifier"> Supervisor: <i>Prof.</i> </span>
					<a class="edu_supervisor_link" href="http://scce.ustb.edu.cn/shiziduiwu/jiaoshixinxi/2018-04-12/86.html" rel="external" target="_blank"> Jian Liu </a>
				</div>
			</div>

			<div class="edu_block_wrapper"> <!-- Bachelor -->
				<div class="edu_block_left">
					<span class="edu_title"> B.S. </span>
					<span class="edu_period"> (4 years) </span>
				</div>
				<div class="edu_block_right">
					<span class="edu_time"> 2007.09 - 2011.06, </span>
					<span class="edu_research"> Communication Engineering </span>
					<span class="edu_institution"> Hangzhou Dianzi University, China </span>
					<span class="edu_supervisor_modifier"> Supervisor: <i>Prof.</i> </span>
					<a class="edu_supervisor_link" href="http://comm.hdu.edu.cn/2018/0526/c2866a71184/pagem.htm" rel="external" target="_blank"> Na Ying </a>
				</div>
			</div>
		</section>

		<section>
			<h1 class="header_title"> Work Experience </h1>

			<div class="work_block_wrapper"> <!-- NTU -->
					<div class="work_block_left">
						<span class="work_title"> Project Officer </span>
						<span class="work_period"> (2 years) </span>
					</div>
					<div class="work_block_right">
						<span class="work_time"> 2014.08 - 2016.06, </span>
						<span class="work_research"> School of Computer Science &amp; Engineering </span>
						<span class="work_institution"> Nanyang Technological University, Singapore </span>
						<span class="work_supervisor_modifier"> Supervisor: <i>Prof.</i> </span>
						<a class="work_supervisor_link" href="http://www.ntu.edu.sg/home/limo/" rel="external" target="_blank"> Mo Li </a>
					</div>
			</div>
		</section>

		<section>
				<h1 class="header_title"> Internship </h1>

				<div class="intern_block_wrapper"> <!-- Bell -->
						<div class="intern_block_left">
							<span class="intern_title"> Summer Intern </span>
							<span class="intern_period"> (10 weeks) </span>
						</div>
						<div class="intern_block_right">
							<span class="intern_time"> 2018.06 - 2018.08, </span>
							<span class="intern_research"> Internet of Things </span>
							<span class="intern_institution"> Bell Labs, USA </span>
							<span class="intern_supervisor_modifier"> Supervisor: <i>Dr.</i> </span>
							<a class="intern_supervisor_link" href="https://www.linkedin.com/in/mostafa-uddin/" rel="external" target="_blank"> Mostafa Uddin </a>
							<span class="intern_supervisor_modifier"> <i>, Dr.</i> </span>
							<a class="intern_supervisor_link" href="https://www.bell-labs.com/usr/fang.hao" rel="external" target="_blank"> Fang Hao </a>
							<span class="intern_supervisor_modifier"> <i>, Dr.</i> </span>
							<a class="intern_supervisor_link" href="https://www.bell-labs.com/usr/sarit.mukherjee" rel="external" target="_blank"> Sarit Mukherjee </a>
						</div>
				</div>

				<div class="intern_block_wrapper"> <!-- msra -->
						<div class="intern_block_left">
							<span class="intern_title"> Spring Intern </span>
							<span class="intern_period"> (12 weeks) </span>
						</div>
						<div class="intern_block_right">
							<span class="intern_time"> 2018.03 - 2018.06, </span>
							<span class="intern_research"> Intelligent Cloud and Edge </span>
							<span class="intern_institution"> Microsoft Research Asia, China </span>
							<span class="intern_supervisor_modifier"> Supervisor: <i>Dr.</i> </span>
							<a class="intern_supervisor_link" href="https://www.microsoft.com/en-us/research/people/yunliu" rel="external" target="_blank"> Yunxin Liu </a>
						</div>
				</div>

				<div class="intern_block_wrapper"> <!-- simula -->
						<div class="intern_block_left">
							<span class="intern_title"> Summer Intern </span>
							<span class="intern_period"> (2 months) </span>
						</div>
						<div class="intern_block_right">
							<span class="intern_time"> 2017.07 - 2017.09, </span>
							<span class="intern_research"> Communication Systems </span>
							<span class="intern_institution"> Simula Research Laboratory, Norway </span>
							<span class="intern_supervisor_modifier"> Supervisor: <i>Dr.</i> </span>
							<a class="intern_supervisor_link" href="https://www.simula.no/people/ahmed" rel="external" target="_blank"> Ahmed Elmokashfi </a>
						</div>
				</div>

		</section>


		<section>
			<h1 class="header_title"> Teaching Assistant </h1>
			<p style="margin-left:20px;margin-top:5px;"> ECS 60: Data Structure and Programming. 2017 Fall Quarter at UC Davis </p>
		</section>

		<section>
			<h1 class="header_title"> Research Topics </h1>
			<p style="margin-left:20px;margin-top:5px;"> VR/AR; Mobile Systems &amp; Applications; 5G; IoT; Machine Learning </p>
		</section>


		<section>
			<h1 class="header_title"> Contact Me </h1>
			<ul class="contact_list">
				<li> <span class="contact_label"> Email: </span> huanle.zhang.cn AT ieee DOT org </li>
				<li> <span class="contact_label"> Office: </span> 2106 Watershed Sciences, Davis, CA 95616, USA </li>
			</ul>

			<div>
				<a href="./document/cv/CV_Huanle_Zhang.pdf" target="_blank"><img src="./image/icon/cv.png" width="80"/> </a>
			</div>
		</section>


		<!-- Use icons from Internet. Below are the credits. -->
		<div class="hide_credit">
			<div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
		</div>

		<?php include 'footer.php'; ?>

	</body>

</html>
