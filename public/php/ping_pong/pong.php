<?php  
    function pageController() {
        $counter = [];
        $counter['gameOver'] = "GAME OVER";

        if (isset($_GET['score'])) {
            $counter['score'] = $_GET['score'];
        } else {
            $counter['score'] = 0;
        }
        return $counter;
    }
    extract(pageController());
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>PONG</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="/bootstrap-3.3.6-dist/css/bootstrap.css">
        
        <style>
            body {
                background-color: darkgreen;
            }

            .glyphicon {
                font-size: 50px;
                margin: 10%;
            }

            .container {
                background-color: darkgreen;
                position: relative;

                border: 6px solid white;
                text-align: center;
                display: block;
                margin: auto;
                width: 50%;
                color: white;
            }

            .divider{
                position: absolute;
                left:50%;
                top: 0%;
                bottom: 0%;
                border-left: 4px solid white;
            }

            img {
                margin-left: 80%;
            }

        </style>
    </head>

    <body>
        <div class="divider"></div>
        <div class="container">
            <h1>Score: <?= $score; ?></h1>
            <a href="/php/ping_pong/ping.php?score=<?= $score + 1; ?>" name="hit" class="glyphicon glyphicon-ok-circle"></a>

            <a href="/php/ping_pong/pong.php?score=<?= $gameOver; ?>" name="miss" class="glyphicon glyphicon-remove-circle"></a>

        </div>
        <img src="ppballrev.png">

        


        
   


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- AJAX and JS
    ================================================== -->
    <!-- bootstarp JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>