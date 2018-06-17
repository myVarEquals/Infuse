<?php

  //Initializing message variables for pass/fail submit
  $alertMessage = '';
  $alertMessageClass = '';

  //Check for Submit Pressed
  if(filter_has_var(INPUT_POST, 'submit')) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $msgSubject = htmlspecialchars($_POST['msgSubject']);
    $message = htmlspecialchars($_POST['message']);

    //Check if all fields hold data
    if(!empty($name) && !empty($email) && !empty($msgSubject) && !empty($message)) {
      //Pass all fields have data
      //Test for valid Email address
      if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        //Invalid Email
        $alertMessage = 'Please enter valid email';
        $alertMessageClass = 'alert-danger';
      } else {
        //Valid Email
        //Where to
        $toEmail = 'Info@infusedhere.com';
        //Subject for email
        $subject = 'Contact Request From '.$name;
        //Body for email
        $body = '
          <html>
            <head>
              <title>Contact Request</title>
            </head>
            <body>
              <h2>Contact Request</h2>
              <p><strong>Name:</strong> '.$name.'</p>
              <p><strong>Email:</strong> '.$email.'</p>
              <hr>
              <p><strong>Subject:</strong> '.$msgSubject.'</p>
              <p><strong>Message:</strong><br>'.$message.'</p>
            </body>
          </html>
          ';
        //Headers for email
        $headers = 'From: Infused Contact Info@infusedhere.com' . "\r\n" .
          'Reply-To: Infused Info@infusedhere.com' . "\r\n" .
          'X-Mailer: PHP/' . phpversion() . "\r\n" .
          'Content-Type: text/html; charset=UTF-8';

        if(mail($toEmail, $subject, $body, $headers)) {
          //Email sent
          $alertMessage = 'Success!';
          $alertMessageClass = 'alert-success';
        } else {
          $alertMessage = 'Email failed to send';
          $alertMessageClass = 'alert-danger';
        }
      }
    } else {
      //Fail
      $alertMessage = 'Please fill out all fields!';
      $alertMessageClass = 'alert-danger';
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Infused</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400|La+Belle+Aurore" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../css/nav.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

  	<!-- <img src='../images/InfuseLogo.png'> -->
  	 <nav id='nav-horizontal' class='navbar fixed-top navbar-expand-md'>
  	  	<a class="navbar-brand" href="index.html">
      		<img src="../images/InfuseLogo.png" height="50" alt="">
    	  	</a>

        <div class='nav-horiz-ul' id='myNav'>
          <!-- Nav Site -->
          <ul class='navbar-nav'>
            <li class='nav-item'>
              <a class='nav-link' href='about.html'>About</a>
            </li>
            <li class='nav-item'>
  						<a class='nav-link' href="info.html">Info</a>
  					</li>
            <li class='nav-item dropdown'>
              <a class='nav-link dropdown-toggle' href='#' id='navbardropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Products</a>
  						<div class="dropdown-menu" aria-labelledby='navbardropdown'>
  							<a class='dropdown-item' href="products.html">Ingredients</a>
  							<a class='dropdown-item' href="#">Diffusers</a>
  							<a class='dropdown-item' href="accessories.html">Accessories</a>
  						</div>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='tour.html'>Tour</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='contact.php'>Contact</a>
            </li>
          </ul>
        </div>
      </nav>
  		<!-- Side Navbar -->

  		<nav id='nav-sidebar'>
  			<!-- Close Sidebar -->
  			<div id='sidebar-head'>
  				<i id="sidebar-close" class="fa fa-window-close"></i>

          <a href='index.html'>
  				  <img id='sidebar-brand' src='../images/InfuseLogo.png' height="30">
          </a>
  			</div>

        <ul class='sidebar-links'>
  				<li class='sidebar-item'><a href='about.html'>About</a></li>
          <li class='sidebar-item'><a href='info.html'>Info</a></li>
  				<li class='sidebar-item nav-item'>
            <a class='nav-link collapsed' href='#sidenavbardropdown' role='button' data-toggle='collapse' data-target='#sidenavbardropdown'>Products▾</a>
						<div class="collapse" id='sidenavbardropdown' aria-expanded='false'>
							<a class='dropdown-item' href="products.html">Ingredients</a>
							<a class='dropdown-item' href="#">Diffusers</a>
							<a class='dropdown-item' href="accessories.html">Accessories</a>
						</div>
          </li>
  				<li class='sidebar-item tour'><a href='tour.html'>Tour</a></li>
  				<li class='sidebar-item'><a href='contact.php'>Contact</a></li>
  			</ul>

  		</nav>

  		<header id='headcontent' class='fixed-top'>
  				<i id='burger' class="fas fa-bars"></i>
  				<div id='sidebar-open' class='text-center'>
            <a href='index.html'>
  					  <img id='side-logo' class='mx-auto' src='../images/InfuseLogo.png'>
            </a>
  				</div>
  		</header>

  		<main id='maincontent'>


        <!-- Contact -->
        <div class="container-fluid text-center" id="contact-section">
          <?php if($alertMessage != ''): ?>
            <div class='alert <?php echo $alertMessageClass; ?>'><?php echo $alertMessage; ?></div>
          <?php endif; ?>
          <div class='row justify-content-center'>
          <div class='contact-box mx-auto'>
            <h1 class="contact-header">Contact</h1>
              <form class='mx-auto' action="#contact-anchor" method="POST">
                <div class="input-group mb-3">
                  <input class="form-control" type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>" id="name" placeholder="Name">
                </div>
                <div class="input-group mb-3">
                  <input class="form-control" type="text" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" id="email" placeholder="Email">
                </div>
                <div class="input-group mb-3">
                  <input class="form-control" type="text" name="msgSubject" value="<?php echo isset($_POST['msgSubject']) ? $msgSubject : ''; ?>" id="msgSubject" placeholder="Subject">
                </div>
                <div class="form-group">
                  <textarea class="form-control" rows="3" name='message' placeholder="Your Message"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                </div>
                <button type="submit" name ="submit">Submit</button>
              </form>
          </div>
        </div>
      </div>

  			<div id='overlay'></div>

  		</main>

  		<footer class='text-center'>

  			<div class='footergrid row justify-content-center text-center'>

  				<div class='footernav'>
  					<h4>Nav</h4>
  					<ul>
              <li><a href='about.html'>About</a></li>
              <li><a href='info.html'>Info</a></li>
  						<li><a href='products.html'>Products</a></li>
  						<li><a href='tour.html'>Tour</a></li>
  						<li><a href='contact.php'>Contact</a></li>
  					</ul>
  				</div>

  				<div class='footerloc'>
  					<h4>Location</h4>
  					<ul>
  						<li>107 S. Rt. 73</li>
  						<li>Marlton, NJ</li>
  						<li>08053</li>
  					</ul>
  				</div>

  				<div class='footerhours'>
  					<h4>Hours</h4>
  					<ul>
  						<li>Sun: 11am - 5pm </li>
  						<li>Mon: CLOSED</li>
  						<li>Tue. - Wed - 11am - 7pm</li>
  						<li>Thur. - Sat: 11am - 9pm</li>
  					</ul>
  				</div>

  			</div>

        <div class='row justify-content-center'>
  				<div>Infused LLC 	&copy;</div>
  				<div>Established 2017</div>
  			</div>

  		</footer>

      <div class="social-media text-center">
    		<a href="https://www.facebook.com/infusedhere" target="_blank"><i class="fab fa-facebook"></i></a>
    		<a href="https://www.instagram.com/infusedhere/" target="_blank"><i class="fab fa-instagram"></i></a>
    		<a href="https://www.pinterest.com/pin/create/button/?url=https%3A%2F%2Fwww.infusedhere.com%2F&media=https%3A%2F%2Fstatic.wixstatic.com%2Fmedia%2F74488e_f398cdc0389c48789a5d4ccbd48d57fc~mv2_d_3320_1263_s_2.png&description=Custom%20organic%20personal%20care%20products%20Marlton%2CNJ" target="_blank"><i class="fab fa-pinterest"></i></a>
    	</div>


  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  	<script src="../javascript/index.js" type='text/javascript'></script>

    <script id="setmore_script" type="text/javascript" src="https://my.setmore.com/webapp/js/src/others/setmore_iframe.js"></script><a id="Setmore_button_iframe" style="float:none; position: fixed; right: -2px; top: 25%; display: block; z-index: 20000" href="https://my.setmore.com/bookingpage/66d58feb-87e7-4dce-9cf6-315db06f535d"><img border="none" src="https://my.setmore.com/webapp/images/bookappt/Setmore-Book-Now.png" alt="Book an appointment with Infuse using SetMore" /></a>


  </body>
</html>
