<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    private static $product, $image, $imageName, $directory, $imageUrl;
    public static function newProduct($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'img/upload/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;

        self::$product = new Product();
        self::$product->name          =$request->name;
        self::$product->price         =$request->price;
        self::$product->description   =$request->description;
        self::$product->image         =self::$imageUrl ;
        self::$product->save();
    }
    public static function UpdateProduct($request,$id)
    {
        self::$product=Product::find($id);
        if($request->file('image'))
        {
            self::$image = $request->file('image');
            self::$imageName = self::$image->getClientOriginalName();
            self::$directory = 'img/upload/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory . self::$imageName;
        }
        else
        {
            self::$imageUrl=self::$product->image;
        }
        self::$product->name          =$request->name;
        self::$product->price         =$request->price;
        self::$product->description   =$request->description;
        self::$product->image         =self::$imageUrl;
        self::$product->save();

    }
}
