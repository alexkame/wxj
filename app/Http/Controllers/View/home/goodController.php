<?php

namespace App\Http\Controllers\View\home;

use App\Model\Goods;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class goodController extends Controller
{
    public function toGood($id)
    {
        $goods = Goods::find($id);
        return view('home.buy')->with('goods', $goods);
    }
}
