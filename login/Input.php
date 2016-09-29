<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        return isset($_REQUEST[$key]);
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        // setting to variable becuse it is a turnary
        // self::has($key) takes you to the pusblic static function has
        $value = self::has($key) ? $_REQUEST[$key] : $default;
        return $value;
    }

    public static function isPost()
    {
        return !empty($_POST);
    }

    public static function getString($key)
    {
        // checks to see if user input is there and a string
        $input = self::get($key);
        if(is_string($input)) {
            return trim($input);
        } else {
            // throws an error if there is no input or not a string
            throw new Exception('Error: THE INPUT IS NOT A STRING');
        }
    }

    public static function getNumber($key)
    {
        $input = self::get($key);
        // is_numeric makes sure that the input is a number
        if(is_numeric($input)) {
            // turns string into a integer 
            $input = floatval($input);
            return $input;
        } else {
            throw new Exception('Error: THE INPUT IS NOT A NUMBER');
        }
    }


    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
















