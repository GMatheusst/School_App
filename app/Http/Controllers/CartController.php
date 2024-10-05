<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Cart;
use App\Http\Requests\StoreUpdateCartRequest;

class CartController extends Controller
{
    public function store(StoreCartRequest $request)
    {
         $cart = Cart::create($request->validated());
       
        return response()->json($cart, 201);
    }

    public function update(UpdateCartRequest $request,Cart $cart)
    {
       $cart->update($request->validated()); 

        return response()->json($cart, 200);
    }
}
