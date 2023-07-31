<?php

namespace App\Controllers;

use WalnutBread\Curl\PostCurl;
use WalnutBread\Databases\DatabaseAdaptor;
use WalnutBread\Time\ExecTime;

class CallController
{
    public static function index() {
        include_once dirname(__DIR__, 2)."/resource/call.php";
    }

    public static function search() {
        $time = new ExecTime(['search_time']);
        $time->start();
        $data = PostCurl::post("https://redisweb.xdev.kr/keyword/search", $_POST, null);
        $time->end();
        $search_time = $time->diff("search_time");

        $decode = json_decode($data);
        echo '<pre>';
        echo $data.'<pre>';
        echo "총 응답시간 : " . $search_time." (sec)<pre>";
        echo "네트워크 소요시간 : " .($search_time - $decode->spend_time)." (sec)<pre>";
        exit();
    }

    public static function list() {
        $time = new ExecTime(['list_time']);
        $time->start();
        $data = PostCurl::post("https://redisweb.xdev.kr/keyword/list", null, null);
        $time->end();
        $list_time = $time->diff("list_time");

        $decode = json_decode($data);
        include_once dirname(__DIR__, 2)."/resource/list.php";
    }

    public static function runTime() {
        $get = $_GET;

        $time = new ExecTime(['run']);
        $time->start();
        $data = PostCurl::post("https://redisweb.xdev.kr/run/time", $get, null);
        // $data = PostCurl::post("http://localhost:9002/run/time", $get, null);
        $time->end();
        $run_time = $time->diff("run");

        $decode = json_decode($data);
        include_once dirname(__DIR__, 2)."/resource/runTime.php";
    }
}