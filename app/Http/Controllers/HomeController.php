<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $products;
    public function index(){
        $this->products = Product::getAllProduct();
        return view('home',['products'=>$this->products]);
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function details(){
        return view('details');
    }


}
