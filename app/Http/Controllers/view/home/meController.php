<?php

namespace App\Http\Controllers\view\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class meController extends Controller
{
    public function toMe()
    {
        return view('home.me');
    }
}
