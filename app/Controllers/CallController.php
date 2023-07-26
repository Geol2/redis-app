<?php

namespace App\Controllers;

use WalnutBread\Curl\PostCurl;

class CallController
{
    public static function index() {
        include_once dirname(__DIR__, 2)."/resource/call.php";
    }
}