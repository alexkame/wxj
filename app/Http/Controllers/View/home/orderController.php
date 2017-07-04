<?php

namespace App\Http\Controllers\View\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class orderController extends Controller
{
    public function toCommit()
    {
        return view('home.commit');
    }
}
