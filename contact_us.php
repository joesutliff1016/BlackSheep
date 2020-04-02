
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="keywords" content="catering, bbq catering for small group, lunch and dinner catering, wedding reception food, bbq party catering, buffet style catering, office party catering, wedding reception caterers, catering group, outdoor catering."/>
      <meta name="description" content="Catering for the greater Seattle area." />
      <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Allura&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="styles/header.css">
      <link rel="stylesheet" type="text/css" href="styles/footer.css">
      <link rel="stylesheet" type="text/css" href="styles/contact_us.css">
      <link rel="icon" type="image/png" href="./images/favicon-16x16.png" sizes="16x16">
      <script src="js/jquery.js"></script>
      <title>Black Sheep Catering - Contact Us</title>
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
      		$to = 'joesutliff1016@gmail.com';
      		mail($to, $subject, $message, 'From: blkshpnw.com');

      		$_POST = array();
      	}

      }

      ?>
   <body>
     <header>
        <div id="left">
        </div>
        <div id="middle">
           <img id="logo" src="./images/Circle-Logo.jpg" alt="Black Sheep Catering Logo">
        </div>
        <div id="right">
           <nav id="navPhone">
              <div class="burger"></div>
              <div class="burger"></div>
              <div class="burger"></div>
           </nav>
        </div>
        <div id="bottom">
           <nav id="main_nav">
              <a href="index.html" class="top_links">HOME</a>
              <a href="about.html" class="top_links">ABOUT US</a>
              <div class="dropdown">
                 <button class="dropbtn">MENU</button>
                 <div class="dropdown-content">
                    <a href="nw_classics.html">NORTHWEST MENU</a>
                    <a href="lunch.html">LUNCH</a>
                    <a href="bbq.html"> CLASSIC BBQ</a>
                    <a href="full_menu.pdf">FULL MENU PDF</a>
                 </div>
              </div>
              <a href="services.html" class="top_links">SERVICES</a>
              <a href="contact_us.php" class="top_links">CONTACT US</a>
           </nav>
        </div>
     </header>
     <nav id="nav">
       <ul id="navPhoneMenu">
          <li><a href="index.html" title="Home">HOME</a></li>
          <li><a href="about.html" title="About Us">ABOUT US</a></li>
          <li><a href="services.html" title="Services">SERVICES</a></li>
          <li><a href="nw_classics.html" title="Northwest Classics Menu">NORTHWEST MENU</a></li>
          <li><a href="lunch.html" title="Lunch Menu">LUNCH</a></li>
          <li><a href="bbq.html" title="Classic BBQ Menu">CLASSIC BBQ</a></li>
          <li><a href="full_menu.pdf" title="Full Menu pdf">FULL MENU PDF</a></li>
       </ul>
     </nav>
     <div id="background"></div>
         <div class="three">
            <div id="contact">
               <div id="three_row1">
                  <h1>Contact Info</h1>
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
                  <h2>Message Us</h2>
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
         <footer>
            <div id="footer_container">
               <div id="footer_row1">
                  <a href="https://www.facebook.com/pg/blkshpnw/posts/?ref=page_internal">
                  <i id="facebook" class="fab fa-facebook" title="Facebook"></i>
                  </a>
                  <a href="https://www.instagram.com/black_sheep_nw/?hl=en">
                  <i id="instagram" class="fab fa-instagram" title="Instagram"></i>
                  </a>
               </div>
               <div id="footer_row2">
                  <i class="fas fa-phone"></i>
                  <br>
                  <p>PHONE</p>
                  <p class="grey">206 391 2860</p>
               </div>
               <div id="footer_row3">
                  <i class="far fa-envelope"></i>
                  <br>
                  <p>EMAIL</p>
                  <a href="mailto:towens@blkshpnw.com">towens@blkshpnw.com</a>
               </div>
               <div id="footer_row4">
                  <i class="fas fa-map-marker-alt"></i>
                  <br>
                  <p>LOCATION</p>
                  <p class="grey">Normandy Park, WA 98148</p>
               </div>
               <div id="footer_row5">
                  <small>&copy; 2018 Black Sheep Catering, Inc. All Rights Reserved</small>
               </div>
            </div>
         </footer>
         <script src="js/my_js.js"></script>
      </body>
   </html>
