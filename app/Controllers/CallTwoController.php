<?php

namespace App\Controllers;

use WalnutBread\Curl\PostCurl;
use WalnutBread\Time\ExecTime;

class CallTwoController
{
    public static function runTime() {
        $get = $_GET;

        $time = new ExecTime(['run']);
        $time->start();
        $data = PostCurl::post("http://158.247.202.184:8080/run/time", $get, null);
        $time->end();
        $run_time = $time->diff("run");

        $decode = json_decode($data);
        include_once dirname(__DIR__, 2)."/resource/runTime.php";
    }
}