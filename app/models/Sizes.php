<?php
/**
 * Created by PhpStorm.
 * User: stevenbraham
 * Date: 14-02-17
 * Time: 22:12
 */

namespace App\Models;


class Sizes {
    public static function all() {
        return [
            [
                'id' => 1,
                'name' => 'Medium'
            ],
            [
                'id' => 2,
                'name' => 'Large'
            ]
            , [
                'id' => 3,
                'name' => 'XL'
            ]
        ];
    }
}