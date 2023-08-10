<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Cart'
        ];
        return view('clients.cart', $data);
    }
}
