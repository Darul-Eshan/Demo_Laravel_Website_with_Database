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
        self::$directory = 'img/uploads/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;

        self::$product = new Product();
        self::$product->name          =$request->name;
        self::$product->price         =$request->price;
        self::$product->description   =$request->description;
        self::$product->image         =$request->image;
        self::$product->save();
    }
}
