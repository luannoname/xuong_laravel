<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {
        // $template = 'client.home';
        $products = Product::query()->latest('id')->with('category')->limit(8)->get();
        return view('client.home', compact('products'));
    }
    public function catalog() {
        return view('client.catalog');
    }
    public function bill() {
        return view('client.bill');
    }
    public function cart() {
        return view('client.cart');
    }
    public function checkout() {
        return view('client.checkout');
    }
    public function login() {
        return view('client.login');
    }
    public function register() {
        return view('client.register');
    }
    public function productDetail() {
        return view('client.product_detail');
    }
}
