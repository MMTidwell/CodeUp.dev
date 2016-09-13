<?php
//function is used to redirect user to called page. Note that $location is used by passing it in as a variable as well as the header. These will change based on the values used when calling and using the function
function redirect($location) {
    header("Location: $location");
    exit;
}

// used to check if the user is autho already. This is used in the login and autho page
function isUserAuthenticated() {
    return isset($_SESSION['logged_in_user']);
}

// is called in the autho file and used to gather the username
function user() {
    return $_SESSION['logged_in_user'];
}

// checks the username and password to see if it is correct. If they are then it will set the username to a key => value pair for later use
function authenticate($username, $password) {
    if ($username == 'guest' && $password == 'password') {
        $_SESSION['logged_in_user'] = $username;
        return true;
    }
    return false;
}

// returns true or false if it is a post method that is used
function isPost() {
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

// used to gather info on username and password
function input($key, $default = '') {
    return isset($_POST[$key]) ? $_POST[$key] : $default;
}

// clears the session and starts a new one
function clearSession() {
    session_unset();
    session_regenerate_id(true);
}





