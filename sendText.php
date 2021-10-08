<?php
include("./library/curl_async.php");


$params = [
    "to"=>"6285648811419",
    "pesan"=>"kode otp anda '3212'. jangan beritahukan ke siapapun untuk menjaga keamanan akun anda"
];
$url = "http://103.41.204.234:50010/waapi/sendText";

$d = post_without_wait($url,$params);
print_r($d);
