

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
      <link rel="stylesheet" type="text/css" href="styles/catering_inquiry.css">
      <title>Black Sheep Catering | Catering Inquiry</title>
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
                <a href="https://www.facebook.com/pg/blkshpnw/posts/?ref=page_internal">
                  <i class="fab fa-facebook" title="Facebook"></i>
                </a>
                <a href="https://www.instagram.com/black_sheep_nw/?hl=en">
                  <i class="fab fa-instagram" title="Instagram"></i>
                </a>
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
                  <a href="contact_us.php" class="top_links">CONTACT US</a>
                  <h1>Black Sheep Catering Inc.</h1>
               </div>
               <div id="top_nav_row3">
                  <nav id="navPhone">
                     <a href="#">
                     <img src="images/hamburger.jpg" width="55" height="48" alt="menu">
                     </a>
                  </nav>
                  <i id="p" class="fas fa-phone">&nbsp; 206 391 2860</i>
               </div>
            </div>
         </header>
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
         <div class="two">
         </div>
         <div class="three">
            <h2>Tell us more about your upcoming event and we'll get back to you shortly!</h2>
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
         <footer class="four">
            <div id="footer_content">
               <i id="location" class="fas fa-map-marker-alt">&nbsp; 17837 1st Ave S. Suite 180 Normandy Park, WA 98148</i>
               <i id="phone" class="fas fa-phone">&nbsp; 206 391 2860</i>
               <i class="far fa-clock">&nbsp; Open Mon-Fri 9:00am-6:00pm, Sat-Sun 1200pm-11:00pm</i>
               <i class="far fa-envelope">&nbsp; <a href="mailto:towens@blkshpnw.com">towens@blkshpnw.com</a></i>
            </div>
            <div id="social">
              <a href="https://www.facebook.com/pg/blkshpnw/posts/?ref=page_internal">
                <i id="facebook" class="fab fa-facebook" title="Facebook"></i>
              </a>
              <a href="https://www.instagram.com/black_sheep_nw/?hl=en">
                <i id="instagram" class="fab fa-instagram" title="Instagram"></i>
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
