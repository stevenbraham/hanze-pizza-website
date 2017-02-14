<?php
/**
 * Created by PhpStorm.
 * User: stevenbraham
 * Date: 14-02-17
 * Time: 20:44
 */

namespace App\Controllers;


use App\Models\Bottoms;
use App\Models\Card;
use App\Models\Compositions;
use App\Models\Pizza;
use App\Models\Sizes;
use Framework\Controller;

class Home extends Controller {
    public function index() {
        //simulate db call
        $data = [
            'pizzas' => Pizza::all(),
            'bottoms' => Bottoms::all(),
            'sizes' => Sizes::all(),
            'compositions' => Compositions::all(),
            'card' => Card::getCard()
        ];
        $this->render('index', $data);
    }
}