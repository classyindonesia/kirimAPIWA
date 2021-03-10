<?php
include("./library/curl_async.php");


$params = [
    "to"=>"6285648811419",
    "pesan"=>"kode otp anda '3212'. jangan beritahukan ke siapapun untuk menjaga keamanan akun anda"
];
$url = "http://192.168.225.132:5000/waapi/sendText";

$d = post_without_wait($url,$params);
print_r($d);