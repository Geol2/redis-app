<?php

namespace App\Controllers;

use WalnutBread\Curl\PostCurl;
use WalnutBread\Time\ExecTime;

class CallController
{
    public static function index() {
        include_once dirname(__DIR__, 2)."/resource/call.php";
    }

    public static function search() {
        $time = new ExecTime(['search_time']);
        $time->start();
        $data = PostCurl::post("http://158.247.202.184:8080/keyword/search", $_POST, null);
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
        $data = PostCurl::post("http://158.247.202.184:8080/keyword/list", null, null);
        $time->end();
        $list_time = $time->diff("list_time");

        $decode = json_decode($data);
        echo '<pre>';
        echo $data.'<pre>';
        echo "총 응답시간 : " . $list_time. " (sec)<pre>";
        echo "네트워크 소요시간 : " .($list_time - $decode->spend_time)." (sec)<pre>";
        exit();
    }
}