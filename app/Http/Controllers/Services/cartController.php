<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use App\Tools\Pusher;
use App\Model\Goods;

class cartController extends Controller
{
    public function add()
    {
        $push = new Pusher();
        $goods = Goods::find($_GET['id']);
        $price = $goods->attr->cut * $goods->price * 0.1;
        Cart::add($goods->id, $goods->name, $price, $_GET['num'], array('origin_price' => $goods->price));
        $push->status = 0;
        $push->message = "添加成功~我在购物车约定你咯";
        return $push->toJson();
    }

    public function remove()
    {
        $push = new Pusher();
        Cart::remove($_GET['id']);
        $push->status = 0;
        $push->message = "删除成功";
        return $push->toJson();
    }
}
