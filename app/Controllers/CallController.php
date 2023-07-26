<?php

namespace App\Controllers;

use WalnutBread\Curl\PostCurl;

class CallController
{
    public static function index() {
        include_once dirname(__DIR__, 2)."/resource/call.php";
    }

    public static function search() {
        $data = PostCurl::post("http://158.247.202.184:8080/keyword/search", $_POST, null);

        echo '<pre>';
        echo $data;
        exit();
    }

    public static function list() {
        $data = PostCurl::post("http://158.247.202.184:8080/keyword/list", null, null);
        
        echo '<pre>';
        echo $data;
        exit();
    }
}