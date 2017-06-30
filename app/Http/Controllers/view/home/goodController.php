<?php

namespace App\Http\Controllers\view\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class goodController extends Controller
{
    public function toGood($id)
    {
        return view('home.goods');
    }
}
