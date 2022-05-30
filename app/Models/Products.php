<?php
 namespace App\Models;

 class Products {



    public static function all(){
        return [
            [
            'id'=> 25456,
            'sku'=> 25456,
            'price' => 470,
            'title' => 'title one',
            'description' => 'lorem aposum lorem aposum lorem aposum lorem aposum lorem aposum'
            ],
            [
            'id'=> 37657,
            'sku'=> 37657,
            'price' => 281,
            'title' => 'title one',
            'description' => 'lorem aposum lorem aposum lorem aposum lorem aposum lorem aposum'
            ],
            [
            'id'=> 890678,
            'sku'=> 890678,
            'price' => 420,
            'title' => 'title one',
            'description' => 'lorem aposum lorem aposum lorem aposum lorem aposum lorem aposum'
            ],
            [
            'id'=> 98765,
            'sku'=> 98765,
            'price' => 400,
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

    public static function getPrice($price){
        // Tax rate 25%
        $tax = 1.25;
         return [
            'priceExcVat'=> $price,
            'priceIncVat' => $price * $tax,
            'priceExcVatFormatted'=> 'SEK '. number_format((float)$price, 2, '.', ''),
            'priceIncVatFormatted'=> 'SEK '. number_format((float)$price * $tax, 2, '.', '')
         ];
    }

    public static function findAll($arr){
        $products = [];
        foreach($arr as $el){
            if($el == 501){
                return 500;
            } else{
                if($el == 98765){
                    sleep(5);
                }
                $product = self::findOne($el);
                if($product != null){
                    $prices = self::getPrice($product['price']);
                    array_push($products, [...$product, ...$prices]);
                }

            }
        }
        return $products;
    }
 }

?>