<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'google.com');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'field=don%27t%20you%20like%20quotes');

$response = curl_exec($ch);

curl_close($ch);
