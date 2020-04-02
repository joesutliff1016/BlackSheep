
<!doctype html>
<html lang="en">
   <html lang="en">
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
         <link rel="stylesheet" type="text/css" href="styles/catering_inquiry.css">
         <link rel="icon" type="image/png" href="./images/favicon-16x16.png" sizes="16x16">
         <title>Black Sheep Catering - Catering Inquiry</title>
         <script src="js/jquery.js"></script>
      </head>
      <?php
         $first_name = $_POST['first_name'];
         $last_name = $_POST['last_name'];
         $email = $_POST['email'];
         $phone = $_POST['phone'];
         $month = $_POST['month'];
         $day = $_POST['day'];
         $year = $_POST['year'];
         $guests = $_POST['guests'];
         $event  = $_POST['event'];
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
         	//check phone
         	if(empty($_POST['phone'])) {
         		$problem = TRUE;
         		$error_message5 = '<p class="error">Please enter your phone number.</p>';
         	}
         	$pattern = '/^\(?(\d{3})\)?[- ]?[. ]?(\d{3})[- ]?[. ]?(\d{4})$/';

         	if(!preg_match($pattern, stripslashes(trim($_POST['phone']))) && !empty($_POST['phone'])) {
         		$problem = TRUE;
         		$error_message5 = '<p class="error">Please enter a valid phone number.</p>';
         	}
         	if(empty($_POST['guests'])){
         		$problem = true;
         		$error_message6 = '<p class="error">Please enter an estimate for the number of guests.</p>';
         	}
         	if($_POST['event'] === 'Event'){
           		$problem = true;
         		$error_message7 = '<p class="error">Please enter the type of event.</p>';
         	}
         	if($_POST['month'] === 'Month' || $_POST['day'] === 'Day' || $_POST['year'] === 'Year'){
           		$problem = true;
         		$error_message8 = '<p class="error">Please enter a complete date.</p>';
         	}

         	if(!$problem){

         		$success_message = '<p class="success">Thank you. Your message has been sent!</p>';

         		$subject = 'Website Catering Inquiry!';
         		$message = "First name: $first_name
         					Last name: $last_name
         					Email: $email
         					Phone: $phone
         					Catering Date: $month, $day $year
         					Guests: $guests
         					Event type: $event
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
              <li><a href="contact_us.php" title="Contact Us">CONTACT US</a></li>
              <li><a href="nw_classics.html" title="Northwest Classics Menu">NORTHWEST MENU</a></li>
              <li><a href="lunch.html" title="Lunch Menu">LUNCH</a></li>
              <li><a href="bbq.html" title="Classic BBQ Menu">CLASSIC BBQ</a></li>
              <li><a href="full_menu.pdf" title="Full Menu pdf">FULL MENU PDF</a></li>
           </ul>
         </nav>
         <div id="background"></div>
         <div class="three">
            <h1>Tell us more about your upcoming event and we'll get back to you shortly!</h1>
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
                  <?php if(!empty($error_message5)){ print $error_message5;}?>
                  <input type="text" name="phone"
                     value="<?php  if(isset($_POST['phone'])){ print htmlspecialchars($_POST['phone']);} ?>" placeholder="Phone"/>
                  <?php if(!empty($error_message6)){ print $error_message6;}?>
                  <input type="text" name="guests"
                     value="<?php  if(isset($_POST['guests'])){ print htmlspecialchars($_POST['guests']);} ?>" placeholder="Number of Guests"/>
                  <?php if(!empty($error_message7)){ print $error_message7;} ?>
                  <p>Type of event:
                     <select name="event">
                     <?php
                        $events = array('Event', 'Wedding', 'Corporate', 'Anniversary', 'Graduation', 'Baby Shower', 'Birthday', 'Suprise Party', 'Cocktail Party', 'BBQ', 'Other');
                        foreach($events as $value) {
                        	if($value == $_POST['event']) {
                        		print "<option value=\"$value\" selected=\"selected\">
                        		$value </option>\n";
                        }else{
                        	print "<option value=\"$value\"> $value </option>\n";
                        	}
                        }

                        ?>
                     </select>
                  </p>
                  <?php if(!empty($error_message8)){ print $error_message8;} ?>
                  <p>Event Date:
                     <select name="month">
                     <?php
                        $months = array(Month, January, February, March , April , May , June , July , August , September , October , November , December);
                        foreach($months as $value) {
                        	if($value == $_POST['month']) {
                        	print "<option value=\"$value\" selected=\"selected\">
                        	$value </option>\n";
                        }else{
                        	print "<option value=\"$value\"> $value </option>\n";
                        	}
                        }

                        ?>
                     </select>
                     <select name="day">
                     <?php
                        $days = array(Day, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31);
                        foreach($days as $value) {
                        	if($value == $_POST['day']) {
                        	print "<option value=\"$value\" selected=\"selected\">
                        	$value </option>\n";
                        }else{
                        	print "<option value=\"$value\"> $value </option>\n";
                        	}
                        }

                        ?>
                     </select>
                     <select name="year">
                     <?php
                        $years = array(Year, 2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027, 2028);
                        foreach($years as $value) {
                        	if($value == $_POST['year']) {
                        	print "<option value=\"$value\" selected=\"selected\">
                        	$value </option>\n";
                        }else{
                        	print "<option value=\"$value\"> $value </option>\n";
                        	}
                        }

                        ?>
                     </select>
                  </p>
                  <textarea name="comments" placeholder="Anything else?" ><?php print $_POST['comments'];  ?></textarea>
                  <input id="submit" type="submit" value="Submit" name="submit" <?php  if($problem){ ?>autofocus <?php }?>   />
               </form>
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
