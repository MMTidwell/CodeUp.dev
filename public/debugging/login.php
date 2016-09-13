<?php
require_once 'functions.php';

function pageController() {
    $data = ['message' => '', 'title' => 'Login'];
    // goes to the functions.php file and runs the isUserAtho function. If the session is set then it will use the redirect function to got to authorized.php, if not then will go to next if statement
    if (isUserAuthenticated()) {
        redirect('authorized.php');
    }
    // goes to the functions.php file and runs the isPost function, if it is not true then it will return $data, if it is true then it will go to the next if statement.
    if (!isPost()) {
        return $data;
    }
    // if the user is not logged in at all then it will ask them to fill in the username and password in order to fill out the $data key => value pairs, then it will redirect them to the autho page
    if (authenticate(input('username'), input('password'))) {
        redirect('authorized.php');
    }
    // if all the above fail and username and password are not correct then it will run this message
    $data['message'] = 'Your username or password are incorrect...';
    return $data;
}

// starts the session
session_start();
// var-dumps the info for the session, this is used to better understand what is going on in the session array
var_dump($_SESSION);
extract(pageController());
?>


<!DOCTYPE html>
<html>
    <?php include 'header.php' ?>
    <body>
        <div class="container">
            <h1>Login</h1>
            <!-- will only show something if the username and password are incorrect since original are set to ''.  -->
            <h2><?= $message ?></h2>
            <form method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input
                        type="text"
                        class="form-control"
                        name="username"
                        id="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        class="form-control"
                        name="password"
                        id="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"
        ></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"
        ></script>
    </body>
</html>