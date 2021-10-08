<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin/dashboard', ['products'=>Product::all()]);
    }

    public function show()
    {

    }

    public function destroy()
    {

    }

    public function update()
    {

    }
}
