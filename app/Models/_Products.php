<?php

namespace App\Models;

class _Products{

    public static function all(){
        $product_coffee = [
            [
                'id'            =>  '1',
                'lead'          =>  'Greek Salad ',
                'heading'       =>  'Salad',
                'coffee_image'  =>  'assets/img/products-01.jpg',
                'desc'          =>  'Fresh spinach, crisp romaine, tomatoes, and Greek olives'
            ],
            [
                'id'            =>  '2',
                'lead'          =>  'Spinach Salad',
                'heading'       =>  'Salad',
                'coffee_image'  =>  'assets/img/products-02.jpg',
                'desc'          =>  'Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette'
            ],
            [
                'id'            =>  '3',
                'lead'          =>  'Mozzarella Stick',
                'heading'       =>  'Starters',
                'coffee_image'  =>  'assets/img/products-03.jpg',
                'desc'          =>  'elongated pieces of mozzarella cheese coated in seasoned breadcrumbs or a light batter, and then deep-fried until golden brown and crispy'
            ]
        ];

        return($product_coffee);
    }

}
