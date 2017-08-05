<?php
$ch = curl_init ();
curl_setopt ($ch, CURLOPT_URL, 'http://oauth2server1/simpleTest');
curl_setopt ($ch, CURLOPT_COOKIE, 'XDEBUG_SESSION=1');
curl_exec ($ch);
?>
