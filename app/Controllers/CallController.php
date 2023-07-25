<?php

namespace App\Controllers;

use WalnutBread\Curl\PostCurl;

class CallController
{
    public static function index() {
        $_POST['time'] = 3600;
        $data = PostCurl::post("158.247.202.184/call/keyword", $_POST, null);

        error_log($data);
    }
}