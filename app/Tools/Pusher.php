<?php
namespace App\Tools;

use App\Http\Controllers\Controller;

class Pusher extends Controller
{
    public $status;
    public $message;

    public function toJson()
    {
        return json_encode($this, JSON_UNESCAPED_UNICODE);
    }
}