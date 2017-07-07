<?php

namespace App\Http\Controllers\View\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;

class orderController extends Controller
{
    public function toCommit()
    {
        $ids = explode(',', $_GET['ids']);
        $items = [];
        $total = 0;
        for ($i = 0; $i < count($ids); $i++) {
            $items[$i] = Cart::get($ids[$i]);
            $total += Cart::get($ids[$i])->getPriceSum();
        }
        return view('home.commit')->with('items', $items)
            ->with('total', Number_format($total, 2, '.', ''));
    }

    public function toOrders()
    {
        return view('home.orders');
    }
}
