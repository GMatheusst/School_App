<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   

    public function store(StoreOrderRequest $request)
    {
      $order = Order::create($request->validated());

      return response()->json($order,201);
    }
   
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order->update($request->validated());
       
        return response()->json($order, 200);
    }

}
