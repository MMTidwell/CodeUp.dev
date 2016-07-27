<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>Kitchen Kingdom - Register</title>

   <!-- Bootstrap Core CSS -->
   <link rel="stylesheet" href="/bootstrap-3.3.6-dist/css/bootstrap.css">

   <!-- Custom CSS -->
   <link href="../adlister/adlister.register.css" rel="stylesheet">

   <!-- Custom Fonts -->
   <!-- <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
       <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->

</head>

<body>
<!-- _______NAV BAR________ -->
   <nav class="top-navbar">
      <!-- Navigation -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.html">Kitchen Kingdom</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                      <li>
                          <a href="about.html">Login</a>
                      </li>
                      <li>
                          <a href="services.html">Sign Up</a>
                      </li>
                      <li>
                          <a href="contact.html">Browse Items</a>
                      </li>
                      <li>
                          <a href="#">Create a Listing</a>
                      </li>
                  </ul>
              </div>
              <!-- /.navbar-collapse -->
          </div>
          <!-- /.container -->
      </nav>
   </nav>



<!--_________FORM___________ -->
   <div class="ad_form">
      <h1>Let the Fun Begin!</h1>
      <form class="reg" method="POST" action="/adlister/adlister.register.php">
         <p>
            <label for="name"></label>
            <input id="name" name="name" type="text" placeholder="First Name" required>
         </p>
         <p>
            <label for="name"></label>
            <input id="name" name="name" type="text" placeholder="Last Name" required>
         </p>
         <p>
            <label for="email"></label>
            <input id="name" name="email" type="email" placeholder="Email" required>
          </p>
          <p>
            <label for="Usernameme"></label>
            <input id="name" name="username" type="text" placeholder="Username" required>
          </p>
          <p>
            <label for="password"></label>
            <input id="name" name="password" type="password" placeholder="Password" required>
          </p>
          <p>
            <label for="confirm_password"></label>
            <input id="name" name="confirm_password" type="password" placeholder="Confrim Password" required>
          </p>
          <p>
            <input type="checkbox" id="checkbox" value="yes" name="newsletter" checked>
            <label for="news_letter">Sign me up for the newsletter!</label>
          </p>
          <p>
            <button type="submit">Submit</button>
          </p>
      </form>
   </div>

<script type="text/javascript">
"use strict"

    var password = document.getElementById("password")
      , confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
      if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
      } else {
        confirm_password.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>   
</body>
</html>