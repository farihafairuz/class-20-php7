<?php


namespace App\classes;


class Product
{
    public function getAllProduct()
    {
        return [
            0=> [
                'id' => 1,
                'name' => 'New Product',
                'price' => 450,
                'description' => 'description',
                'image' => '1.jpg'
            ],
            1=> [
                'id' => 2,
                'name' => 'New Tshirt',
                'price' => 1500,
                'description' => 'description',
                'image' => '2.jpg'
            ],
            2=> [
                'id' => 3,
                'name' => 'New Sharee',
                'price' => 4500,
                'description' => 'description',
                'image' => '3.jpg'
            ]

        ];
    }

}