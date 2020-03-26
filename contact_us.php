

<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="keywords" content="catering, bbq catering for small group, lunch and dinner catering, wedding reception food, bbq party catering, buffet style catering, office party catering, wedding reception caterers, catering group, outdoor catering."/>
      <meta name="description" content="Catering for the greater Seattle area." />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="styles/contact_style.css">
      <title>Black Sheep Catering | Contact Us</title>
      <script src="js/jquery.js"></script>
   </head>
   <?php
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $email = $_POST['email'];
      $comments = $_POST['comments'];


      if($_SERVER['REQUEST_METHOD'] == 'POST') {
      	$problem = false;

      	if(empty($_POST['first_name'])){
      		$problem = true;
      		$error_message1 = '<p class="error">Please enter your first name.</p>';
      	}
      	if(empty($_POST['last_name'])){
      		$problem = true;
      		$error_message2 = '<p class="error">Please enter your last name.</p>';
      	}
      	if(empty($_POST['email'])){
      		$problem = true;
      		$error_message3 = '<p class="error">Please enter your email.</p>';
      	}
      	$pattern = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';

      	if(!preg_match($pattern, stripslashes(trim($_POST['email']))) && !empty($_POST['email'])) {
      		$problem = true;
      		$error_message4 = '<p class="error">Please enter a valid email.</p>';
      	}
      	if(empty($_POST['comments'])){
      		$problem = true;
      		$error_message5 = '<p class="error">Please enter a short message.</p>';
      	}
      	if(!$problem){

      		$success_message = '<p class="success">Thank you. Your message has been sent!</p>';

      		$subject = 'Website Contact!';
      		$message = "First name: $first_name
      		Last name: $last_name
      		Email: $email
      		Comments: $comments";

      		//sends email to administrator
      		$to = 'towens@blkshpnw.com';
      		mail($to, $subject, $message, 'From: blkshpnw.com');

      		$_POST = array();
      	}

      }

      ?>
   <body>
      <div id="content">
         <header class="one">
            <div id="top_nav">
               <div id="top_nav_row1">
               </div>
               <div id="top_nav_row2">
                  <a href="index.html" class="top_links">HOME</a>
                  <div class="dropdown">
                     <button class="dropbtn">MENU</button>
                     <i class="fa fa-caret-down"></i>
                     <div class="dropdown-content">
                        <a href="nw_classics.html">NW MENU</a>
                        <a href="lunch.html">LUNCH</a>
                        <a href="bbq.html">CLASSIC BBQ</a>
                        <a href="full_menu.pdf">FULL MENU PDF</a>
                     </div>
                  </div>
                  <a href="about.html" class="top_links">ABOUT US</a>
                  <a href="#" class="top_links">CONTACT US</a>
                  <h1>Black Sheep Catering Inc.</h1>
               </div>
               <div id="top_nav_row3">
                  <nav id="navPhone">
                     <a href="#">
                     <img src="images/hamburger.jpg" width="55" height="48" alt="menu">
                     </a>
                  </nav>
               </div>
               <div id="top_nav_row4">
                  <nav id="nav">
                     <ul id="navPhoneMenu">
                        <li><a href="index.html" title="">HOME</a></li>
                        <li><a href="nw_classics.html" title="">NW CLASSICS</a></li>
                        <li><a href="lunch.html" title="">LUNCH</a></li>
                        <li><a href="bbq.html" title="">CLASSIC BBQ</a></li>
                        <li><a href="full_menu.pdf" title="">FULL MENU PDF</a></li>
                        <li><a href="about.html" title="">ABOUT US</a></li>
                     </ul>
                  </nav>
               </div>
            </div>
         </header>
         <div class="two">
         </div>
         <div class="three">
            <div id="contact">
               <div id="three_row1">
                  <h2>Contact Info</h2>
                  <div class="contact_info">
                     <i class="fas fa-map-marker-alt">&nbsp; 17837 1st Ave S. Suite 180 Normandy Park, WA 98148</i>
                  </div>
                  <div class="contact_info">
                     <i class="fas fa-phone">&nbsp; 206 391 2860</i>
                  </div>
                  <div class="contact_info">
                     <i class="far fa-envelope">&nbsp; <a href="mailto:towens@blkshpnw.com">towens@blkshpnw.com</a></i>
                  </div>
               </div>
               <div id="three_row2">
                  <h3>Contact Form</h3>
                  <div id="form_container">
                     <?php if(!$problem){ print $success_message;} ?>
                     <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="post">
                        <?php if(!empty($error_message1)){ print $error_message1;} ?>
                        <input type="text" name="first_name"
                           value="<?php  if(isset($_POST['first_name'])){ print htmlspecialchars($_POST['first_name']);} ?>" placeholder="First Name"/>
                        <?php if(!empty($error_message2)){ print $error_message2;} ?>
                        <input type="text" name="last_name"
                           value="<?php  if(isset($_POST['last_name'])){ print htmlspecialchars($_POST['last_name']);} ?>" placeholder="Last Name" />
                        <?php if(!empty($error_message3)){ print $error_message3;}if(!empty($error_message4)){ print $error_message4;} ?>
                        <input type="text" name="email"
                           value="<?php  if(isset($_POST['email'])){ print htmlspecialchars($_POST['email']);} ?>" placeholder="Email"/>
                        <?php if(!empty($error_message5)){ print $error_message5;} ?>
                        <textarea name="comments" placeholder="Message" ><?php print $_POST['comments'];  ?></textarea>
                        <input id="submit" type="submit" value="Submit" name="submit" <?php  if($problem){ ?>autofocus <?php }?>   />
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <footer class="four">
            <div id="footer_content">
               <i class="fas fa-map-marker-alt">&nbsp; 17837 1st Ave S. Suite 180 Normandy Park, WA 98148</i>
               <i class="fas fa-phone">&nbsp; 206 391 2860</i>
               <i class="far fa-clock">&nbsp; Open Mon-Fri 9:00am-6:00pm, Sat-Sun 1200pm-11:00pm</i>
               <i class="far fa-envelope">&nbsp; <a href="mailto:towens@blkshpnw.com">towens@blkshpnw.com</a></i>
            </div>
            <div id="social">
              <a href="https://www.facebook.com/pg/blkshpnw/posts/?ref=page_internal">
                <i class="fab fa-facebook" title="Facebook"></i>
              </a>
              <a href="https://www.instagram.com/black_sheep_nw/?hl=en">
                <i class="fab fa-instagram" title="Instagram"></i>
              </a>
            </div>
            <div id="copywright">
               <small>&copy; 2018 Black Sheep Catering, Inc. All Rights Reserved</small>
            </div>
         </footer>
      </div>
      <script src="js/my_js.js"></script>
   </body>
</html>
