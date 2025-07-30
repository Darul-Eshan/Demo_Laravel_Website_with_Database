<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $products =[
        0 => [
            'id' => 1,
            'name' => 'Product 1',
            "price" =>'2500',
            'image' => 'img/1.jpg',
            'description' => 'Product 1 description',
        ],
        1 => ['id' => 2,
            'name' => 'Product 2',
            "price" =>'2500',
            'image' => 'img/2.jpg',
            'description' => 'Product 2 description',],
        2 => ['id' => 3,
            'name' => 'Product 3',
            "price" =>'2500',
            'image' => 'img/3.jpg',
            'description' => 'Product 3 description',],
        3 => ['id' => 4,
            'name' => 'Product 4',
            "price" =>'2500',
            'image' => 'img/4.jpg',
            'description' => 'Product 4 description',],

    ];
    public static function getAllProduct(){
        return self::$products;
          }
          public static function getProductById($id)
          {
              foreach(self::$products as $product){
                  if ($product['id'] == $id){
                      return $product;
                  }
              }
          }
    }
