<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
header("Content-Type: text/plain");

exec('sudo chmod -f 777 /var/HOSTINKEY/data/debug.log');

echo file_get_contents("/var/HOSTINKEY/services/data/getinfo");

echo "

";

$debugLog = "/var/HOSTINKEY/data/debug.log";
echo file_get_contents($debugLog);
?>