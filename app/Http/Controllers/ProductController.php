<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products;
    public function index()
    {
        return view('add-product');
    }
    public function create(Request $request)

    {
        Product::newProduct($request);
        return back()->with('massage','Product added successfully');
    }
    public function manage()
    {
        $this->products = Product::all();
        return view('manage-product',['products'=>$this->products]);
    }
}
