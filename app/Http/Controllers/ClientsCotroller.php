<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientsCotroller extends Controller
{
    public function index()
    {
        return view('clients.home');
    }

    public function cart()
    {
        return view('clients.cart');
    }

    public function contact_us()
    {
        return view('clients.contact_us');
    }

    public function about_us()
    {
        return view('clients.about_us');
    }

    public function shop()
    {
        return view('clients.shop');
    }

    public function blog()
    {
        return view('clients.blog');
    }
    public function Error()
    {
        return view('clients.404');
    }

    public function wishlist()
    {
        return view('clients.wishlist');
    }
    public function checkout()
    {
        return view('clients.checkout');
    }
}
