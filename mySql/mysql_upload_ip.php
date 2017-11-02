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
	$tableName = "ip_table";

	$ret = "";

	$mySqli = new mysqli($serverName, $userName, $password, $dbName);
	
	if ($mySqli->connect_error) {
		die("Connection failed: " . $mySqli->connect_error);
	}

	$ret = $ret . "Connection successful\n";
	
	$timeNow = date('Y-m-d H:i:s');

	// $ip = $ip . " "; // add a space after each ip	

	$stmt = $mySqli->prepare("DELETE FROM " . $tableName . " WHERE message=?");
	$stmt->bind_param('s', $msg);
	$stmt->execute();
//	$stmt->close();

	$stmt = $mySqli->prepare("INSERT INTO " . $tableName . " (ip, message, timestamp) VALUES(?, ?, ?)");
	$stmt->bind_param('sss', $ip, $msg, $timeNow);
	
	if ($stmt->execute()){
		$ret = $ret . "Records inserted successfully.\n";
	} else {
		 exit("ERROR: Could not be ableto execute $query. " . 
					mysqli_error($mySqli));
	}

	$stmt->close();
	$mySqli->close();

	return "OK";
}
?>
