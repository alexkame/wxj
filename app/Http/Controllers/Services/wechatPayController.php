<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class wechatPayController extends Controller
{
    public function getPayConfig()
    {
        $card_id = $_GET['card_id'];
        $order_price = $_GET['final_price'];
        $receipt_name = $_GET['receipt_name'];
        $phone = $_GET['phone'];
        $city = $_GET['city'];
        $location = $_GET['location'];
        $receipt_data['receipt_name'] = $receipt_name;
        $receipt_data['phone'] = $phone;
        $receipt_data['city'] = $city;
        $receipt_data['location'] = $location;
        dd($receipt_data);
    }
}
