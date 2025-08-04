<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $products,$product,$fullName;
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
    public function makeFullName(Request $request)
    {
       $this->fullName=$request->first_name.' '.$request->last_name;
       return back()->with([
           'massage'    => $this->fullName,
           'first_name' => $request->first_name,
           'last_name'  => $request->last_name
       ]);
    }
    public function showCalculatorForm()
    {
        return view('calculator'); // your Blade file: resources/views/calculate.blade.php
    }
    public function calculator(Request $request)
    {
        $firstNumber = $request->input('first_number');
        $secondNumber = $request->input('second_number');
        $choice = $request->input('choice');
        $result = null;

        switch ($choice) {
            case '+':
                $result = $firstNumber + $secondNumber;
                break;
            case '-':
                $result = $firstNumber - $secondNumber;
                break;
            case '*':
                $result = $firstNumber * $secondNumber;
                break;
            case '/':
                if ($secondNumber != 0) {
                    $result = $firstNumber / $secondNumber;
                } else {
                    $result = 'Division by zero not allowed';
                }
                break;
            default:
                $result = 'Invalid operator';
                break;
        }

        return back()->with([
            'first_number' => $firstNumber,
            'second_number' => $secondNumber,
            'choice'       => $choice,
            'result'       => $result,
        ]);
    }



}
