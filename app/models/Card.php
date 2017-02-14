<?php
/**
 * Created by PhpStorm.
 * User: stevenbraham
 * Date: 14-02-17
 * Time: 23:23
 */

namespace App\Models;

/**
 * Stores and retrieves the card in the session
 * @package App\Models
 */
class Card {
    /**
     * Loads the card from the session
     * @return array
     */
    public static function getCard() {
        //checks if there is a card variable
        if (isset($_SESSION['card'])) {
            return $_SESSION['card'];
        }
        //if this line is reached, no valid card was found
        return [];
    }

    /**
     * Adds a new item to the card
     * @param array $item
     */
    public static function insert($item) {
        //get card
        $card = static::getCard();
        //append item to array and give the row an GUID
        $card[time()] = $item;
        //store item
        $_SESSION['card'] = $card;
    }

    /**
     * Empty's the card variable
     */
    public static function resetCard() {
        session_unset();
    }
}