<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Store;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin/layouts/home/home');
    }

    public function stores()
    {
        return view('admin/layouts/stores/all_stores', ['stores'=>Store::all()]);
    }

    public function products()
    {
        return view('admin/layouts/products/all_products', ['products'=>Product::all()]);
    }

}
