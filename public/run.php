<?php
include_once './../vendor/autoload.php';

use WalnutBread\Curl\PostCurl;
use WalnutBread\Time\ExecTime;

$get = [
    "time" => 10
];

$time = new ExecTime(['run']);
$time->start();
$data = PostCurl::post("http://158.247.202.184:8080/run/time", $get, null);
$time->end();
$run_time = $time->diff("run");

$decode = json_decode($data);
var_dump($data);