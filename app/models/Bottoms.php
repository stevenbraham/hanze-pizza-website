<?php
/**
 * Created by PhpStorm.
 * User: stevenbraham
 * Date: 14-02-17
 * Time: 22:12
 */

namespace App\Models;


class Bottoms {
    public static function all() {
        return [
            [
                'id' => 1,
                'name' => 'Italian crust'
            ],
            [
                'id' => 2,
                'name' => 'Grandma style'
            ]
            , [
                'id' => 3,
                'name' => 'USA style'
            ]
        ];
    }
}