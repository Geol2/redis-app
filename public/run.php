<?php
include_once './../vendor/autoload.php';

use GuzzleHttp\Psr7\Request;
use WalnutBread\Curl\PostCurl;
use WalnutBread\Time\ExecTime;

$time = new ExecTime(['run']);
$time->start();
$client = new GuzzleHttp\Client();
$request = new Request("POST", "http://localhost:9002/run/time?time=".$_GET['time']);
$promise = $client->sendAsync($request)->then(function ($response) {
    echo 'I completed!' .$response->getBody();
});
$promise->wait();

$time->end();
$run_time = $time->diff("run");