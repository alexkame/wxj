<?php

namespace App\Http\Controllers\view\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class bokoController extends Controller
{
    public function toBoko()
    {
        return view('home.boko');
    }
}
