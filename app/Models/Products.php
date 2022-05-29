<?php
 namespace App\Models;

 class Products {



    public static function all(){
        return [
            [
            'id'=> 25456,
            'sku'=> 25456,
            'priceExcVat' => 470,
            'title' => 'title one',
            'description' => 'lorem aposum lorem aposum lorem aposum lorem aposum lorem aposum'
            ],
            [
            'id'=> 37657,
            'sku'=> 37657,
            'priceExcVat' => 281,
            'title' => 'title one',
            'description' => 'lorem aposum lorem aposum lorem aposum lorem aposum lorem aposum'
            ],
            [
            'id'=> 890678,
            'sku'=> 890678,
            'priceExcVat' => 420,
            'title' => 'title one',
            'description' => 'lorem aposum lorem aposum lorem aposum lorem aposum lorem aposum'
            ],
            [
            'id'=> 98765,
            'sku'=> 98765,
            'priceExcVat' => 400,
            'title' => 'title one',
            'description' => 'lorem aposum lorem aposum lorem aposum lorem aposum lorem aposum'
            ],
    ];
    }

    public static function findOne($sku){
        $products = self::all();
        foreach($products as $product){
            if($product['sku'] == $sku){
                return $product;
            }
        }
    }

    public static function find($arr){
        $products = [];
        foreach($arr as $el){
            if($el == 501){
                return 500;
            } else{
                if($el == 98765){
                    sleep(5);
                }
                $product = self::findOne($el);
                array_push($products, $product);
            }
        }
        return $products;
    }
 }

?>