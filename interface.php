<!DOCTYPE html>
<html>

	<head>
		<title> Huanle Zhang's Personal Website </title>
		
		<meta charset="UTF-8">
		<meta name="description" content="Homepage">
		<meta name="keywords" content="Huanle Zhang, IP, interface">
		<meta name="author" content="Huanle Zhang">
		<meta http-equiv="refresh" content="60"> <!-- refresh every 60s -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="shortcut icon" href="favicon.ico" /> <!-- Icon -->
		
		<script src="js/jquery-3.2.1.js"></script>
		
		<link rel="stylesheet" href="css/theme.css" />
		<link rel="stylesheet" href="css/header.css" />
		<link rel="stylesheet" href="css/footer.css" />
		
		<link rel="stylesheet" href="css/interface.css" />
		
	</head>
	
	<body>
		
		<?php include 'header.php'; ?>

		
		<section id="content_start">
			
			<!-- display -->
			<h1 class="header_title"> Show IP Address </h1>
			<p class="ip_description"> Good for embedded devices without monitors. Display IP addresses of your devices on this website. Download the shell script at my <a href="https://github.com/dtczhl/dtc-show-ip" target="_balnk">Github</a> </p> 
			<table class="ip_table">
				<tr class="ip_header_row">
					<th class="ip_header"> Description </th>
					<th class="ip_header"> IP Address </th>
					<th class="ip_header"> Last Update </th> 
				</tr>
<?php		
			// _account.php file defines variables for mysql account
			//		$serverName
			//		$userName
			//		$password 
			require_once('./mySql/_account.php');

			global $serverName;
			global $userName;
			global $password;

			$dbName = "dtczhl_interface";
			$tableName = "ip_table";

			$mySqli = new mysqli($serverName, $userName, $password, $dbName);
			if ($mySqli->connect_error){
				die("Connection failed: " . $mySqli->connect_error);
			}
			
			$result = $mySqli->query('SELECT * FROM ' . $tableName . ' ORDER BY message');
			if ($result->num_rows > 0){
				while ($row = $result->fetch_assoc()){
					echo '				';	
					echo '<tr class="ip_row">' . "\r\n";
					echo '				  ';
					echo '	<td class="ip_message"> ' . $row['message'] . ' </td>' . "\r\n";
					echo '				  ';
					echo '	<td class="ip_ip"> ' . str_replace(" ", ";&nbsp &nbsp", $row['ip']) . ' </td>' . "\r\n";
					echo '				  ';
					echo '	<td class="ip_timestamp"> ' . $row['timestamp'] . ' </td>' . "\r\n";
					echo '				';
					echo '</tr>' . "\r\n";
				}
			}
			$mySqli->close();
?>
		</table> <!-- end of ip table -->
		</section>
		
		<?php include 'footer.php'; ?>
		
	</body>

</html>
