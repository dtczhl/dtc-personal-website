<?php

	# response format
	#     dtcResponse=[0-9]
	#     0 - OK
	#     1 - IP address string two long

	$data = json_decode(file_get_contents('php://input'), true);
	if (array_key_exists('your_IPs', $data)){
		$IPs_str = $data['your_IPs'];
		if (strlen($IPs_str) > 10*16){
			# 10 IP address should be enough 
			echo "dtcResponse=1;";
			exit("IP address string too long\n");
		} else {
			echo "dtcResponse=0;";
		}

	}
	print_r($data);
	
?>
