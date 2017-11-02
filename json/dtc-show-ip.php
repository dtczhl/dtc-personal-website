<?php

	// response format
	//     dtcResponse=[0-9]
	//     0 - OK
	//     1 - IP address string too long (10*16)
	//     2 - mysql error
	//     3 - message string too long (20)

	// length constraint
	$ip_str_max_len = 10*16; 
	$message_max_len = 20;

	$data = json_decode(file_get_contents('php://input'), true);

	// _account.php file defines variables for mysql account
	//		$serverName
	//		$userName
	//		$password 
	require_once('../mySql/_account.php');

	require_once('../mySql/mysql_upload_ip.php');

	if (array_key_exists('your_IPs', $data) and
			array_key_exists('your_message', $data) ){
		$IPs_str = $data['your_IPs'];
		$message = $data['your_message'];
	
		if (strlen($IPs_str) > $ip_str_max_len){
			// 10 IP address should be enough 
			echo "dtcResponse=1;";
			exit("IP address string too long\n");
		}

		if (strlen($message) > $message_max_len){
			// message too long
			echo "dtcResponse=3;";
			exit("Message string too long\n");
		}

		// upload to website
		if (mysql_upload_ip($IPs_str, $message) != 'OK'){
			echo "dtcResponse=2;";
			exit("mysql upload ip error\n");
		}


		echo "dtcResponse=0;";
		exit("Done!\n");
	}
	// print_r($data);
	// echo "OK!!!";
?>
