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
		<meta name="description" content="Publications">
		<meta name="keywords" content="Huanle Zhang, Publications">
		<meta name="author" content="Huanle Zhang">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="shortcut icon" href="favicon.ico" /> <!-- Icon -->
		
		<link rel="stylesheet" href="css/theme.css" />
		<link rel="stylesheet" href="css/header.css" />
		<link rel="stylesheet" href="css/footer.css" />
		
		<link rel="stylesheet" href="css/publications.css" />
		<link rel="stylesheet" href="css/donation.css" />
		
		<script src="js/jquery-3.2.1.js"></script>
		<script src="js/icon_bind.js"></script> 
		<script src="google-citation-helper/dtcGoogleCitationHelper.js"></script>
		
	</head>
	
	<body>
		
		<?php include 'header.php'; ?>
		<!-- <?php include 'donation.php'; ?> -->
		
		<div class="note">
			<p> Citation count from Google Scholar. Click 
				<a href="https://github.com/dtczhl/dtc-google-citation-helper" target="_blank"> <span> HERE </span> </a> 
				to get my code of extracting and showing real-time citation information </p>
			<p> <b> *undefined </b> means Google Scholar hasn't included that paper </p>
		</div>
		
<div class="main_wrapper">
		
		<section id="content_start">
			<h1 class="journal_title header_title"> Journal Papers </h1>
			<ol class="journal_list bar_top">

				<li> <span class="publisher_abbr">TMC</span>
					<div class="citation"> <p> Citation </p> <span class="citation_count dtcGoogleCitationCount"> 0 </span> </div>
					<span class="paper_title dtcGooglePaperTitle"> StrLight: An Imperceptible Visible Light Communication System with String Lights </span>
					<span class="author"><span class="meAuthor">Huanle Zhang</span>, Wan Du, Mo Li, Kaishun Wu and Prasant Mohapatra </span>		
					<span class="publisher"> IEEE Transactions on Mobile Computing </span>
					<div class="download">
						<a href="publication/journal/strlight_tmc/paper.pdf" target="_blank" ref="author" class="pdf"></a>
					 </div> <!-- donwload resources -->
				</li>
			
				<li> <span class="publisher_abbr">TMC'18</span> 
					 <div class="citation"> <p> Citation </p> <span class="citation_count dtcGoogleCitationCount"> 0 </span> </div>
					 <span class="paper_title dtcGooglePaperTitle"> An Acoustic-based Encounter Profiling System </span> 
					 <span class="author"><span class="meAuthor">Huanle Zhang</span>, Wan Du, Pengfei Zhou, Mo Li and Prasant Mohapatra </span> 
					 <span class="publisher"> IEEE Transactions on Mobile Computing </span>
					 <span class="vol_number"> 17 </span>
					 <span class="issue_number"> 8 </span>
					 <span class="page_number"> 1750-1763 </span>
					 <span class="date"> 2018 </span>
					 <div class="download">
						<a href="publication/journal/dopenc_tmc_18/paper.pdf" target="_blank" ref="author" class="pdf"></a>
					 </div> <!-- donwload resources -->
				</li>
				
				<li> <span class="publisher_abbr">TON'17</span> 
					 <div class="citation"> <p> Citation </p> <span class="citation_count dtcGoogleCitationCount"> 0 </span> </div>
					 <span class="paper_title dtcGooglePaperTitle"> Pando: Fountain-Enabled Fast Data Dissemination with Constructive Interference </span> 
					 <span class="author"> Wan Du, Jansen Christian Liando, <span class="meAuthor">Huanle Zhang</span> and Mo Li </span> 
					 <span class="publisher"> IEEE/ACM Transactions on Networking </span> 
					 <span class="vol_number"> 25 </span>
					 <span class="issue_number"> 2 </span>
					 <span class="page_number"> 820-833 </span> 
					 <span class="date"> 2017 </span>
					 <div class="download">
						<a href="publication/journal/pando_ton_17/paper.pdf" target="_blank" ref="author" class="pdf"></a>
					 </div> <!-- donwload resources -->
				</li>
				
				<li> <span class="publisher_abbr">IJCS'14</span> 
					 <div class="citation"> <p> Citation </p> <span class="citation_count dtcGoogleCitationCount"> 0 </span> </div>
				     <span class="paper_title dtcGooglePaperTitle"> Analysis of Accessing to the Nearest and to the Strongest Base Station in Femtocell Networks </span> 		
					 <span class="author"> <span class="meAuthor">Huanle Zhang</span>, Jian Liu and Haili Shi </span> 
					 <span class="publisher"> International Journal of Communication Systems </span> 
					 <span class="doi"> 10.1002/dac.2851 </span>
					 <span class="date"> 2014 </span>
					 <div class="download">
						<a href="publication/journal/analysis_ijcs_14/paper.pdf" target="_blank" ref="author" class="pdf"></a>
					 </div> <!-- donwload resources -->
				</li>
				
				<li> <span class="publisher_abbr">AISS'13</span>
					 <div class="citation"> <p> Citation </p> <span class="citation_count dtcGoogleCitationCount"> 0 </span> </div>
					 <span class="paper_title dtcGooglePaperTitle"> OFDMA Femtocell Gateway Scheduling based on Coloring </span> 
					 <span class="author"> <span class="meAuthor">Huanle Zhang</span>, Jian Liu, Yu Fu and Niangeng Guo </span>
					 <span class="publisher"> Advances in Information Sciences and Service Sciences </span> 
					 <span class="vol_number"> 5 </span>
					 <span class="issue_number"> 12 </span>
					 <span class="page_number"> 192-203 </span> 
					 <span class="date"> 2013 </span>
					 <div class="download">
						<a href="publication/journal/ofdma_aiss_13/paper.pdf" target="_blank" ref="author" class="pdf"></a>
					 </div> <!-- donwload resources -->
				</li>
				
			</ol>
		</section>
		
		<section>
		<h1 class="conference_title header_title"> Conference Papers </h1>
			<ol class="conference_list bar_top">
			
				<li> <span class="publisher_abbr">ICPADS'18</span> 
					 <div class="citation"> <p> Citation </p> <span class="citation_count dtcGoogleCitationCount"> 0 </span> </div>
					 <span class="paper_title dtcGooglePaperTitle"> WiFi and Multiple Interfaces: Adequate for Virtual Reality? </span> 
					 <span class="author"> <span class="meAuthor">Huanle Zhang</span>, Ahmed Elmokashfi and Prasant Mohapatra</span> 
					 <span class="publisher"> IEEE Conference on Parallel and Distributed Systems </span> 
					 <span class="page_number"> 1-8 </span> 
					 <span class="conference_location"> Singapore </span> 
					 <span class="date"> 2018 </span>
					 <div class="download">
						<a href="publication/conference/wifi_icpads_18/paper.pdf" target="_blank" ref="author" class="pdf"></a>
					 </div> <!-- donwload resources -->
				</li>

				<li> <span class="publisher_abbr">MobiCom'16</span> 
					 <div class="citation"> <p> Citation </p> <span class="citation_count dtcGoogleCitationCount"> 0 </span> </div>
				     <span class="paper_title dtcGooglePaperTitle"> DopEnc: Acoustic-based Encounter Profiling Using Smartphones</span> 
					 <span class="author"> <span class="meAuthor">Huanle Zhang</span>, Wan Du, Pengfei Zhou, Mo Li and Prasant Mohapatra</span> 
					 <span class="publisher"> ACM Conference on Mobile Computing and Networking </span> 
					 <span class="page_number"> 294-307 </span> 
					 <span class="conference_location"> New York, USA </span> 
					 <span class="date"> 2016 </span>
					 <div class="download">
						<a href="publication/conference/dopenc_mobicom_16/paper.pdf" target="_blank" ref="author" class="pdf"></a>
						<a href="https://www.youtube.com/watch?v=HJAMjpLhizE" target="_blank" ref="external" class="video"></a>
						<a href="publication/conference/dopenc_mobicom_16/slides.pptx" target="_blank" ref="author" class="slides"></a>
					 </div> <!-- donwload resources -->
				</li>
				
				<li> <span class="publisher_abbr">SenSys'15</span> 
					 <div class="citation"> <p> Citation </p> <span class="citation_count dtcGoogleCitationCount"> 0 </span> </div>
				     <span class="paper_title dtcGooglePaperTitle"> When Pipelines Meet Fountain: Fast Data Dissemination in Wireless Sensor Networks</span> 
					 <span class="author"> Wan Du, Jansen Christian Liando, <span class="meAuthor">Huanle Zhang</span> and Mo Li </span> 
					 <span class="publisher"> ACM Conference on Embedded Networked Sensor Systems </span> 
					 <span class="page_number"> 365-378 </span> 
					 <span class="conference_location"> Seoul, South Korea </span> 
					 <span class="date"> 2015 </span>
					 <div class="download">
						<a href="publication/conference/when_sensys_15/paper.pdf" target="_blank" ref="author" class="pdf"></a>
						<a href="publication/conference/when_sensys_15/best_paper_award.pdf" target="_blank" ref="author" class="award"> <span class="award_title">Best Paper Award</span></a>
					 </div> <!-- donwload resources -->
				</li>
				
				<li> <span class="publisher_abbr">Globecom'13</span> 
					 <div class="citation"> <p> Citation </p> <span class="citation_count dtcGoogleCitationCount"> 0 </span> </div>
				     <span class="paper_title dtcGooglePaperTitle"> Analysis of Femtocell Coverage Fraction and Isolated Probability using Stochastic Geometry</span> 
					 <span class="author"> <span class="meAuthor">Huanle Zhang</span>, Jian Liu, Yupeng Jia and Yulu Ma </span> 
					 <span class="publisher"> IEEE Global Communications Conference </span> 
					 <span class="page_number"> 4699-4704 </span> 
					 <span class="conference_location"> Atlanta, USA </span> 
					 <span class="date"> 2013 </span>
					 <div class="download">
						<a href="publication/conference/analysis_globecom_13/paper.pdf" target="_blank" ref="author" class="pdf"></a>
						<a href="publication/conference/analysis_globecom_13/student_travel_grant.jpg" target="_blank" ref="author" class="award"> <span class="award_title">Student Travel Grant</span></a>
					 </div> <!-- donwload resources -->
				</li>
				
				<li> <span class="publisher_abbr">CCT'13</span> 
					 <div class="citation"> <p> Citation </p> <span class="citation_count dtcGoogleCitationCount"> 0 </span> </div>
				     <span class="paper_title dtcGooglePaperTitle"> Optimal Transmission Distance of Mean Progress and Mean Transport in Device-to-device Networks</span> 
					 <span class="author"> <span class="meAuthor">Huanle Zhang</span>, Yu Fu and Jian Liu </span> 
					 <span class="publisher"> International Conference on Cyberspace Technology </span> 
					 <span class="page_number"> 332-337 </span> 
					 <span class="conference_location"> Beijing, China </span> 
					 <span class="date"> 2013 </span>
					 <div class="download">
						<a href="publication/conference/optimal_cct_13/paper.pdf" target="_blank" ref="author" class="pdf"></a>
					 </div> <!-- donwload resources -->
				</li>
				
				<li> <span class="publisher_abbr">MINES'13</span> 
					 <div class="citation"> <p> Citation </p> <span class="citation_count dtcGoogleCitationCount"> 0 </span> </div>
				     <span class="paper_title dtcGooglePaperTitle"> A Tractable Framework for Power Consumption in Femtocell Networks</span> 
					 <span class="author"> <span class="meAuthor">Huanle Zhang</span>, Jian Liu and Niangeng Guo </span> 
					 <span class="publisher"> International Conference on Multimedia Information Networking and Security </span> 
					 <span class="page_number"> 546-550 </span> 
					 <span class="conference_location"> Beijing, China </span> 
					 <span class="date"> 2013 </span>
					 <div class="download">
						<a href="publication/conference/tractable_mines_13/paper.pdf" target="_blank" ref="author" class="pdf"></a>
					 </div> <!-- donwload resources -->
				</li>
				
				<li> <span class="publisher_abbr">SEIS'13</span> 
					 <div class="citation"> <p> Citation </p> <span class="citation_count dtcGoogleCitationCount"> 0 </span> </div>
				     <span class="paper_title dtcGooglePaperTitle"> Policy on Downlink Access of Femtocell Based on OFDMA in Dense Employment Residential Environment </span> 
					 <span class="author"> <span class="meAuthor">Huanle Zhang</span> and Jian Liu </span> 
					 <span class="publisher"> International Conference on Software Engineering and Information System </span> 
					 <span class="page_number"> 2682-2685 </span> 
					 <span class="conference_location"> Shijiazhuang, China </span> 
					 <span class="date"> 2013 </span>
					 <div class="download">
						<a href="publication/conference/policy_seis_13/paper.pdf" target="_blank" ref="author" class="pdf"></a>
					 </div> <!-- donwload resources -->
				</li>
				
			</ol>
		</section>
		
		<section>
			<h1 class="review_title header_title"> Reviewer </h1>
			<ul class="review_list bar_top">
				<li> 
					<span class="review_name"> EURASIP Journal on Wireless Communications and Networking (JWCN) </span> 
					<span class="review_date"> 2015 </span>
				</li>
				<li> 
					<span class="review_name"> IEEE Global Communications Conference (IEEE GLOBECOM) </span> 
					<span class="review_date"> 2014 </span>
				</li>
				<li> 
					<span class="review_name"> IEEE Internet of Things Journal (IEEE IoT) </span> 
					<span class="review_date"> 2013, 2014 </span>
				</li>
			</ul>
		</section>
		
		<section>
			<h1 class="member_title header_title"> Membership </h1>
			<ul class="member_list bar_top">
			
				<li> 
					<span class="member_name"> IEEE Member </span> 
					<span class="member_date"> 2013-Present </span>
				</li>

				<li> 
					<span class="member_name"> IEEE ComSoc SPCE </span> 
					<span class="member_date">  2016-Present </span>
				</li>
			</ul>
			
		</section>
		
		<!-- Use icons from Internet. Below are the credits. -->
		<div class="hide_credit">
			<div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
			<div>Icons made by <a href="http://www.flaticon.com/authors/madebyoliver" title="Madebyoliver">Madebyoliver</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
			<div>Icons made by <a href="http://www.flaticon.com/authors/madebyoliver" title="Madebyoliver">Madebyoliver</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
			<div>Icons made by <a href="http://www.flaticon.com/authors/vectors-market" title="Vectors Market">Vectors Market</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
		</div>

</div> <!-- end of main wrapper -->
		
		<script>
			dtcGoogleCitationCount('https://scholar.google.com/citations?user=Xm4NYnsAAAAJ&hl=en');
		</script>
		
		<?php include 'footer.php'; ?>
		
	</body>

</html>