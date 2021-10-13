<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Store;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin/dash_home');
    }

    public function stores()
    {
        return view('admin/dash_stores', ['stores'=>Store::all()]);
    }

    public function products()
    {
        return view('admin/dash_products', ['products'=>Product::all()]);
    }

}
