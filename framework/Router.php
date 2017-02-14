<?php
/**
 * Created by PhpStorm.
 * User: stevenbraham
 * Date: 14-02-17
 * Time: 20:22
 */

namespace Framework;

use App\Controllers\Home;

/**
 * Handles routing of my application
 * @package Framework
 */
class Router {
    public function parseRequest() {
        //first I retrieve the page the person wants to view
        $controller = Utils::getInputParameter('controller', 'get', 'home');
        $action = Utils::getInputParameter('controller', 'get', 'index');
        //TODO:dynamic controller/action path
        switch ($controller) {
            case "home":
                $home = new Home();
                switch ($action) {
                    case "index":
                        return $home->index();
                        break;
                    default:
                        break;
                }
                $home->index();
            default:
                break;
                //if this line is reached, there was no valid controller/function
                return Utils::throwHttpError(404);
        }

    }
}