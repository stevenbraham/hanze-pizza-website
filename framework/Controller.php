<?php
/**
 * Created by PhpStorm.
 * User: stevenbraham
 * Date: 14-02-17
 * Time: 20:21
 */

namespace Framework;

/**
 * The controller base class
 * @package Framework
 */
abstract class Controller {
    /**
     * Renders a file from a class views folder
     * Will automatically append/prepend footer and header
     * @param string $viewName the file name without .php
     * @param array $params optional array with parameters for the view
     * @param bool $return if set to true instead of echoing, the function will return the generated html
     * @return void|string will only return something if $return is set to true
     */
    public final function render($viewName, $params = [], $return = false) {
        /**
         * first the class of the object gets calculated
         * than I remove the namespace
         * afterwards I do a to lower because view folders are based on lowercase
         * finally I append the view name
         */
        $requestedView = FRAMEWORK_BASE_PATH . 'app/views/' . strtolower(str_replace("App\Controllers\\", "", get_class($this))) . '/' . $viewName . '.php';
        //check if view exist
        if (!file_exists($requestedView)) {
            throw new \Exception('View ' . $viewName . ' not found in path' . $requestedView);
            die;
        }
        if ($return === true) {
            //use object buffer to catch the output of the require statements
            ob_start();
            require FRAMEWORK_BASE_PATH . 'app/views/layout/header.php';
            require $requestedView;
            require FRAMEWORK_BASE_PATH . 'app/views/layout/footer.php';
            return ob_get_clean();
        }
        //normally we just require and output the result in the browser
        require FRAMEWORK_BASE_PATH . 'app/views/layout/header.php';
        require $requestedView;
        require FRAMEWORK_BASE_PATH . 'app/views/layout/footer.php';
    }
}