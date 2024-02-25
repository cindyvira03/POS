<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function foodBeverages()
    {
        return view('product.food');
    }

    public function beautyHealth()
    {
        return view('product.beauty');
    }

    public function homeCare()
    {
        return view('product.home');
    }

    public function babyKid()
    {
        return view('product.baby');
    }
}
