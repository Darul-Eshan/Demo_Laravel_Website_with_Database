<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $products,$product;
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
    public function details($id){
        $this->product=Product::getProductById($id);
        return view('details',['product'=>$this->product]);
    }
    public function makeFullName()
    {
        return "hello";
    }



}
