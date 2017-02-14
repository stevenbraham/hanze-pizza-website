<?php
/**
 * Created by PhpStorm.
 * User: stevenbraham
 * Date: 14-02-17
 * Time: 20:44
 */

namespace App\Controllers;


use Framework\Controller;

class Home extends Controller {
    public function index() {
        //simulate db call
        $this->render('index');
    }
}