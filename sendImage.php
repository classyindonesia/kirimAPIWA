<?php
include("./library/curl_async.php");


$params = [
    "to"=>"6285648811419",
    "pesan"=>"test kirim gambar",
    "imageurl"=>"http://blog.classy.id/upload/foto_slide/5a6d33e5bd48b98826fdae4c24b4f470_20190819221648.jpeg",
    "image_name"=>"upin.jpg"
];

$url = "http://103.41.204.234:50010/waapi/sendImage";

$d = post_without_wait($url,$params);
print_r($d);
