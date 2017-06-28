<?php

namespace App\Http\Controllers\view\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class basketController extends Controller
{
    public function toBasket()
    {
        return view('home.basket');
    }
}
