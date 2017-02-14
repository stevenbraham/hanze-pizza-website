<?php
/**
 * Created by PhpStorm.
 * User: stevenbraham
 * Date: 14-02-17
 * Time: 22:12
 */

namespace App\Models;


class Pizza {
    public static function all() {
        return [
            [
                'id' => 1,
                'name' => 'Salami',
                'price' => 3
            ],
            [
                'id' => 2,
                'name' => 'Tonno',
                'price' => 3.5
            ]
            , [
                'id' => 3,
                'name' => 'Hawaii',
                'price' => 3.75
            ]
        ];
    }
}