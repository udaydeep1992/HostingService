<?php

$status = true;
if (@!fsockopen("127.0.0.1", 3310, $errno, $errstr, 1)) {
	$status = false;
}

$info = json_decode(file_get_contents("/var/HOSTINKEY/services/data/getinfo"), true);


$return["status"] = $status;
$return["version"] = $info["version"];

echo json_encode($return);

?>