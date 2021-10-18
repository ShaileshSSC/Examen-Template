<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function update(Request $request, $cart)
    {
        if($request->session()->has('cart'))
        {
            $items = json_decode($cart);
        }else 
        {
            $items = [];
        }

        //($items, (int)$cart);
        $request->session()->put('cart', $items);
        $request->session()->save();
        return response()->json(json_decode($cart), 200);
    }

    public function store(Request $request, $cart)
    {
        // if($request->session()->has('cart'))
        // {
        //     $items = $request->session()->get('cart');
        // }else 
        // {
        //     $items = [];
        // }

        // array_push($items, $cart);
        // $request->session()->put('cart', $items);

        // $request->session()->save();
        return response()->json(array('msg'=> $cart), 200);
    }

    public function show()
    {
        return 'show';
    }

    public function index(Request $request)
    {
        return view('public/cart/cart');
    }
}
