<?php
/**
 * Created by PhpStorm.
 * User: stevenbraham
 * Date: 14-02-17
 * Time: 23:18
 */

namespace App\Controllers;


use Framework\Controller;
use Framework\Utils;

class Card extends Controller {
    public function Add() {
        //this function reads the post data and pushes a new order to the session
        $refferer = Utils::getInputParameter('referrer', 'post', 'card');
        //use the Card model to insert a new item
        \App\Models\Card::insert(
            [
                'pizza' => Utils::getInputParameter('pizza', 'post'),
                'price' => Utils::getInputParameter('price', 'post'),
                'size' => Utils::getInputParameter('size', 'post'),
                'bottom' => Utils::getInputParameter('bottom', 'post'),
                'composition' => Utils::getInputParameter('composition', 'post'),
                'amount' => Utils::getInputParameter('amount', 'post')
            ]
        );
        //after storing redirect
        if ($refferer == "home") {
            $this->redirectTo('home', 'index');
        } else {
            $this->redirectTo('card', 'view');
        }
    }

    public function Delete() {
        $referrer = Utils::getInputParameter('referrer', 'post', 'card');
        $id = Utils::getInputParameter('id', 'post');
        \App\Models\Card::delete($id);
        //after delete
        if ($referrer == "home") {
            $this->redirectTo('home', 'index');
        } else {
            $this->redirectTo('card', 'view');
        }
    }
}