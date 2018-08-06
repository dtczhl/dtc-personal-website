<?php 
	require "libs/Mobile_Detect.php";
	$mobileDetect = new Mobile_Detect;
	if ( $mobileDetect->isMobile() && !$mobileDetect->isTablet() ) {
		header('Location: mobilePhone.php');
		exit();
	}
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
			<h1 class="education_title header_title"> Education </h1>
			<table class="education_table bar_top">
				<tr class="degree_row"> <!-- PhD -->
					<td> Ph.D., </td>
					<td> 2016.09 - Now, </td>
					<td> Computer &amp; Information Sciences </td>
					<td>  </td>
				</tr>
				<tr class="university_row">
					<td> </td>
					<td colspan="3"> University of California, Davis, USA </td>
				</tr> 
				<tr class="supervisor_row">
					<td></td>
					<td colspan="3"> Supervisor: <span class="supervisor"> 
						<i>Prof.</i> <span class="supervisor_name"> <a href="https://faculty.engineering.ucdavis.edu/mohapatra/" rel="external" target="_blank"> Prasant Mohapatra </a> </span> </span> </td>
				</tr> <!-- end of PhD -->
				<tr class="degree_row"> <!-- Master -->
					<td> M.S., </td>
					<td> 2011.09 - 2014.06, </td>
					<td> Communication &amp; Information System </td>
					<td>  </td>
				</tr>
				<tr class="university_row">
					<td class="duration"> (3 yr) </td>
					<td colspan="3"> University of Electronic Science &amp; Technology of China </td>
				</tr> 
				<tr class="supervisor_row">
					<td></td>
					<td colspan="3"> Supervisor: <span class="supervisor"> 
						<i>Prof.</i> <span class="supervisor_name"> <a href="http://scce.ustb.edu.cn/article.action?categoryId=29&boardaId=104&facultyId=544" rel="external" target="_blank"> Jian Liu </a></span> </span> </td>
				</tr> <!-- end of Master -->
				<tr class="degree_row"> <!-- BS -->
					<td> B.S., </td>
					<td> 2007.09 - 2011.06, </td>
					<td> Communication Engineering </td>
					<td>  </td>
				</tr>
				<tr class="university_row">
					<td class="duration"> (4 yr) </td>
					<td colspan="3"> Hangzhou Dianzi University, China </td>
				</tr> 
				<tr class="supervisor_row">
					<td></td>
					<td colspan="3"> Supervisor: <span class="supervisor"> 
						<i>Prof.</i> <span class="supervisor_name"> Na Ying </span> </span> </td>
				</tr> <!-- end of BS -->
			</table>
		</section>
		
		<section>
			<h1 class="work_title header_title"> Work Experience </h1>
			<table class="work_table bar_top">
				<tr class="work_row"> <!-- NTU -->
					<td> Project Officer, </td>
					<td> 2014.08 - 2016.06, </td>
					<td> School of Computer Science &amp; Engineering </td>
					<td>  </td>
				</tr>
				<tr class="company_row">
					<td class="supplement"> (Research Assistant)</td>
					<td colspan="3"> Nanyang Technological University, Singapore </td>
				</tr> 
				<tr class="supervisor_row">
					<td class="duration"> (2 yr) </td>
					<td colspan="3"> Supervisor: <span class="supervisor"> 
						<i>Prof.</i> <span class="supervisor_name"> <a href="https://www.ntu.edu.sg/home/limo/" rel="external" target="_blank"> Mo Li </a> </span> </span> </td>
				</tr> <!-- end of NTU -->
			</table>
		</section>
		
		<section>
			<h1 class="intern_title header_title"> Internship </h1>
			<table class="intern_table bar_top">
				<tr class="intern_row"> <!-- bell -->
					<td> Summer Intern, </td>
					<td> 2018.06 - 20.18.08, </td>
					<td> Internet of Things </td>
					<td> </td>
				</tr>
				<tr class="company_row">
					<td class="duration"> (10 wk) </td>
					<td colspan="3"> Bell Laboratory, USA </td>
				</tr>
				<tr class="supervisor_row">
					<td></td>
					<td colspan="3"> Supervisor: <span class="supervisor">
						<i>Dr.</i> <span class="supervisor_name"> <a href="https://www.bell-labs.com/usr/sarit.mukherjee" rel="external" target="_blank"> Sarit Mukherjee </a></span>,&nbsp;&nbsp;  
						<i>Dr.</i> <span class="supervisor_name"> <a href="https://www.bell-labs.com/usr/fang.hao" rel="external" target="_blank"> Fang Hao </a></span>,&nbsp;&nbsp;
						<i>Dr.</i> <span class="supervisor_name"> <a href="https://www.linkedin.com/in/mostafa-uddin/" rel="external" target="_blank"> Mostafa Uddin </a></span>
					</span> </td>
				</tr>
				<tr class="intern_row"> <!-- msra -->
					<td> Spring Intern, </td>
					<td> 2018.03 - 2018.06, </td>
					<td> Intelligent Cloud and Edge </td>
					<td> </td>
				</tr>
				<tr class="company_row">
					<td class="duration"> (12 wk) </td>
					<td colspan="3"> Microsoft Research Asia, China </td>
				</tr> 
				<tr class="supervisor_row">
					<td></td>
					<td colspan="3"> Supervisor: <span class="supervisor"> 
						<i>Dr.</i> <span class="supervisor_name"> <a href="https://www.microsoft.com/en-us/research/people/yunliu" rel="external" target="_blank"> Yunxin Liu </a></span> </span> </td>
				</tr> <!-- end of simula -->

				<tr class="intern_row"> <!-- simula -->
					<td> Summer Intern, </td>
					<td> 2017.07 - 2017.09, </td>
					<td> Communication Systems </td>
					<td>  </td>
				</tr>
				<tr class="company_row">
					<td class="duration"> (2 mo) </td>
					<td colspan="3"> Simula Research Laboratory, Norway </td>
				</tr> 
				<tr class="supervisor_row">
					<td></td>
					<td colspan="3"> Supervisor: <span class="supervisor"> 
						<i>Dr.</i> <span class="supervisor_name"> <a href="https://www.simula.no/people/ahmed" rel="external" target="_blank"> Ahmed Elmokashfi </a></span> </span> </td>
				</tr> <!-- end of simula -->
			</table>
		</section>
		
		<section>
			<h1 class="teaching_title header_title"> Teaching Assistant </h1>
			<div class="ta_div">
				<p class="teaching_block bar_top"> <span class="tag_highlight"> ECS 60:</span> <span class="course_name">Data Structure and Programming.</span> 2017 Fall Quarter at UC Davis </p>
				<button type="button" class="course_evaluation" onclick="showECS60EvaluationComments()"> Student Evaluation Comments </button>
			</div>
		</section>
		
		<section>
			<h1 class="research_title header_title"> Research Topics </h1>
			<p class="research_block bar_top"> AR/VR Systems; Mobile Systems &amp; Applications; 3G/4G/5G; Internet of Things
		</section>
		
		<section>
			<h1 class="contact_title header_title"> Contact Me </h1>
			<ul class="contact_list bar_top">
				<li> <span class="contact_label"> Email: </span> huanle.zhang.cn AT ieee DOT org </li>
				<li> <span class="contact_label"> GitHub: </span> <a href="https://github.com/dtczhl" rel="external" target="_blank"> https://github.com/dtczhl </a> </li>
				<li> <span class="contact_label"> LinkedIn: </span> <a href="https://www.linkedin.com/in/huanle-zhang-24b745a6/" rel ="external" target="_blank"> https://www.linkedin.com/in/huanle-zhang-24b745a6/ </a> </li>
				<li> <span class="contact_label"> Google Scholar: </span> <a href="https://scholar.google.com/citations?user=Xm4NYnsAAAAJ&hl=en" rel="external" target="_blank"> https://scholar.google.com/citations?user=Xm4NYnsAAAAJ </a> </li>
				<li> <span class="contact_label"> Address: </span> 2106 Watershed Sciences, Davis, CA, USA </li>
				<li> <a href="./document/cv/CV_Huanle_Zhang.pdf" target="_blank"><img src="./image/icon/cv.png" width="60"/> </a> </li>
			</ul>
			
		</section>
		
		
		<!-- Use icons from Internet. Below are the credits. -->
		<div class="hide_credit">
			<div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
		</div>
	
		<?php include 'footer.php'; ?>
		
	</body>

</html>