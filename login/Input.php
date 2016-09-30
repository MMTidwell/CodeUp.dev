<?php
// not using InvalidArg... due to it already being built in PHP
// class InvalidArgumentException extends Exception {}

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

    public static function getString($key, $min = 1, $max = PHP_INT_MAX)
    {
        // // checks to see if user input is there and a string
        // $input = self::get($key);
        // if(is_string($input)) {
        //     return trim($input);
        // } else {
        //     // throws an error if there is no input or not a string
        //     throw new Exception('Entry must be valid name, location, and description');
        // }

        $input = self::get($key);
        if (!is_string($key) || !is_numeric($min) && !is_numeric($max)) {
            // InvalidArg... does not need to be declared at the top since it is built in
            throw new InvalidArgumentException("Entry must be a valid $input entry");
        } else if (! self::has($key)) {
            throw new OutOfRangeException("Entry is out of range");
        } else if (!is_string($input)) {
            throw new DomainException("There was a Domain Exception thrown");
        } else if (strlen($input) < $min || strlen($input) > $max) {
            throw new LengthException("Invalid length in $key");
        }
        return trim($input);
    }

    public static function getNumber($key, $min = 1, $max = PHP_INT_MAX)
    {
        // $input = self::get($key);
        // // is_numeric makes sure that the input is a number
        // if(is_numeric($input)) {
        //     // turns string into a integer 
        //     $input = floatval($input);
        //     return $input;
        // } else {
        //     throw new Exception('Must be a valid number');
        // }

        $input = self::get($key);
        if (!is_string($key) || !is_numeric($min) && !is_numeric($max)) {
            // InvalidArg... does not need to be declared at the top since it is built in
            throw new InvalidArgumentException("Entry must be a valid $input entry");
        } else if (! self::has($key)) {
            throw new OutOfRangeException("Entry is out of range");
        } else if (strlen($input) < $min || strlen($input) > $max) {
            throw new RangeException("Invalid length in $input");
        }
        return trim($input);
    }


    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
















