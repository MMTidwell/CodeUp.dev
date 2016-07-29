<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>Kitchen Kingdom - Contact</title>

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

   <div class="ad_form">
	   <h2>Questions, Commints, or Concerns?<br>Don't hesitate to email us!</h2>
		<form method="GET" action="/adlister/ads_contact.php">
			<p>
				<label for="to"></label>
				<input id="name" type="email" placeholder="To">
			</p>
			<p>
				<label for="from"></label>
				<input id="name" type="email" placeholder="From">
			<p>
				<label for="subject"></label>
				<input id="name" type="text" placeholder="Subject">
			</p>
			<p>
				<textarea name="email" id="name" cols="60" rows="8" placeholder="Send an email"></textarea>
					<!-- cols deals with length -->
					<!-- rows deals with height -->
			</p>
				<input type="checkbox" id="checkbox" name="copy" value="yes" checked>
				<label for="copy">Send me a copy!</label>
			<p>
				<button>Send Email</button>
			</p>
		</form>
	</div>
</body>
</html>