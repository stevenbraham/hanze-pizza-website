<?php
/**
 * Created by PhpStorm.
 * User: stevenbraham
 * Date: 14-02-17
 * Time: 22:12
 */

namespace App\Models;


class Compositions {
    public static function all() {
        return [
            [
                'id' => 1,
                'name' => 'Tomato sauce'
            ],
            [
                'id' => 2,
                'name' => 'Special sauce'
            ]
            , [
                'id' => 3,
                'name' => 'Surprise sauce'
            ]
        ];
    }
}