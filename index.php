<?php
$ip = $_SERVER['REMOTE_ADDR']; 
$date=getdate(date("U"));
$timestamp = "$date[year]-$date[mon]-$date[mday]";
$url = 'https://exonerator.torproject.org/?ip='.$ip.'&timestamp='.$timestamp.'&lang=en';
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_TIMEOUT, 12); 
$result = curl_exec($ch);
curl_close ($ch);
if(strpos( $result, 'Result is negative' ) == true) {echo 'No';}
if(strpos( $result, 'Result is positive' ) == true) {echo 'Yes';}
?>
