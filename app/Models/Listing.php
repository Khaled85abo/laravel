<?php
namespace App\Models;


class Listing {
    public static function all(){
        return [
        [   'id'=> 1,
            'title' => 'listing one',
            'description' => 'lorem aposum lorem aposum lorem aposum lorem aposum lorem aposum'
        ],
        [   'id'=> 2,
            'title' => 'listing two',
            'description' => 'lorem aposum lorem aposum lorem aposum lorem aposum lorem aposum'
          ],
        [   'id'=> 3,
            'title' => 'listing three',
            'description' => 'lorem aposum lorem aposum lorem aposum lorem aposum lorem aposum'
          ],
        ];
    }

    public static function find($id){
        $listings = self::all();
        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
}
?>