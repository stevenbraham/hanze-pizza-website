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

    /**
     * loops over the pizza array and tries to find the price of a pizza
     * Throws exception if the pizza can't be found
     * @param $pizzaName
     * @throws \Exception
     * @return float
     */
    public static function getPriceByName($pizzaName) {
        $pizzas = static::all();
        foreach ($pizzas as $pizza) {
            if ($pizza['name'] == $pizzaName) {
                return $pizza['price'];
            }
        }
        //invalid name if this line is reached
        throw new \Exception($pizzaName . ' is not a valid pizza name');
    }
}