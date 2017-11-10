<?php
$ip = $_SERVER['REMOTE_ADDR']; 
$date = getdate(date("U"));
$timestamp = "$date[year]-$date[mon]-$date[mday]";
$url = 'https://exonerator.torproject.org/?ip='.$ip.'&timestamp='.$timestamp.'&lang=en';
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_TIMEOUT, 4); 
$result = curl_exec($ch);
curl_close ($ch);
if(strpos( $result, 'Result is negative' ) == true) {echo 'No';}
if(strpos( $result, 'Result is positive' ) == true) {echo 'Yes';}
if( $result == '' ) {echo 'Exonerator Denied Request';}
?>

<!--
In case you want to block ToR users from accessing the page;
copy this code the top of that page and remove line 12 of this code
and
in line 13 (of this code), replace
{echo 'Yes';}
with
{echo 'ToR network is blocked on this site';exit;}
Remember, the exit statement is crucial.

Furthermore, the name or use of the variable names won't affect if you have used the same variable names down the code.
I guess that was obvious (in most cases).
-->
