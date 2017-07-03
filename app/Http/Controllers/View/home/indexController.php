<?php

namespace App\Http\Controllers\View\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Goods;
use App\model\Attributes;

class indexController extends Controller
{
    public function toIndex()
    {
        $hots = Attributes::where('attribute', 0)->leftjoin('goods', 'attributes.goods_id', '=', 'goods.id')->get();
        $sales = Attributes::where('attribute', 2)->leftjoin('goods', 'attributes.goods_id', '=', 'goods.id')->get();
        return view('home.index')->with('hots', $hots)
            ->with('sales', $sales);
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
