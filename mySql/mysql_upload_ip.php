<?php

/*
 * function call to upload ip addresses
 *
 * Huanle Zhang
 * www.huanlezhang.com
 */

function mysql_upload_ip($ip, $msg) {

	global $serverName;
	global $userName;
	global $password;

	$dbName = "dtczhl_interface";

	$ret = "";

	$mySqli = new mysqli($serverName, $userName, $password, $dbName);
	
	if ($mySqli->connect_error) {
		die("Connection failed: " . $mySqli->connect_error);
	}

	$ret = $ret . "Connection successful\n";
	
	$timeNow = date('Y-m-d H:i:s');

	$ip = $ip . " "; // add a space after each ip	
	$query = "INSERT INTO ip_table (ip, message, timestamp) " . 
			"VALUES ('$ip', '$msg', '$timeNow')";
	
	if (mysqli_query($mySqli, $query)){
		$ret = $ret . "Records inserted successfully.\n";
	} else {
		 exit("ERROR: Could not be ableto execute $query. " . 
					mysqli_error($mySqli));
	}
	
	mysqli_close($mySqli);

	return "OK";
}
?>
