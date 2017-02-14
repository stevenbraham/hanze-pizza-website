<?php
/**
 * Created by PhpStorm.
 * User: stevenbraham
 * Date: 14-02-17
 * Time: 20:23
 */

namespace Framework;

/**
 * Class with several util functions
 * That I could not fit anywhere
 * @package Framework
 */
final class Utils {

    /**
     * This functions aborts all execution
     * and throws an http error
     * @param int $httpCode
     * @param string $message optional message you want to display
     */
    public static function throwHttpError($httpCode, $message = "") {
        http_response_code($httpCode);
        die($message);
    }

    /**
     * Retrieves a parameter from Get or Post
     * Supports returning a default value
     * In case the parameter is empty or not found
     * @param string $name
     * @param string $mode valid options are get and post
     * @param string $default
     * @throws \Exception
     * @return string
     */
    public static function getInputParameter($name, $mode = "get", $default = "") {
        /**
         * Array with modes my function can handle
         */
        $supportedModes = [
            'post' => INPUT_POST,
            'get' => INPUT_GET
        ];
        if (!array_key_exists($mode, $supportedModes)) {
            //invalid mode used
            throw new \Exception("Unsupported mode used, please use 'post' or 'get'");
        }
        $value = filter_input(INPUT_GET, $name);
        //check if value from post/get is valid, otherwise return $default
        return !empty($value) ? $value : $default; //short hand if statement for cleaner code
    }
}