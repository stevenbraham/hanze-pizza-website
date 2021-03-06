<?php
/**
 * Created by PhpStorm.
 * User: stevenbraham
 * Date: 14-02-17
 * Time: 23:18
 */

namespace App\Controllers;


use App\Models\Pizza;
use Framework\Controller;
use Framework\Utils;

class Card extends Controller {
    public function Add() {
        //this function reads the post data and pushes a new order to the session
        $refferer = Utils::getInputParameter('referrer', 'post', 'card');
        $pizzaName = Utils::getInputParameter('pizza', 'post');
        //retrieve price from pizza model, normally I would id, but I don't have a database
        //use the Card model to insert a new item
        \App\Models\Card::insert(
            [
                'pizza' => $pizzaName,
                'price' => Pizza::getPriceByName($pizzaName),
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

    /**
     * Nice table overview of card
     */
    public function View() {
        $this->render('view', ['card' => \App\Models\Card::getCard()]);
    }

    public function Pay() {
        //destroy session;
        \App\Models\Card::resetCard();
        session_destroy();
        $this->render('pay');
    }
}