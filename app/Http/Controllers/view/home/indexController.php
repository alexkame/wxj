<?php

namespace App\Http\Controllers\view\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    public function toIndex()
    {
        return view('home.index');
    }

    public function toHot()
    {
        return view('home.goods');
    }

    public function toCut()
    {
        return view('home.goods');
    }

    public function toSale()
    {
        return view('home.goods');
    }
}
