<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ericliao79\l5allpay\Opay;

class OrderController extends Controller
{
    public function createOrder()
    {
        $Opay = new Opay();
        $order_id = str_random(16);
        $total = 5000;
        $item = '手機殼';
        $desc = '測試';
        $order = $Opay->setOrder($order_id, $total, $item, $desc);
        $form = $order->submitOrder();

        return view("createOrder", ['form' => $form]);
    }
}
