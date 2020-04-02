<?php

$email = $_POST['email'];


if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$problem = false;

	if(empty($_POST['email'])){
		$problem = true;
	}
	$pattern = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';

	if(!preg_match($pattern, stripslashes(trim($_POST['email']))) && !empty($_POST['email'])) {
		$problem = true;
	}
	if(!$problem){

		$subject = 'Newsletter Subscriber!';
		$message = " You have a new subscriber! Their Email is: $email";

		//sends email to administrator
		$to = 'joesutliff1016@gmail.com';
		mail($to, $subject, $message, 'From: blkshpnw.com');


		print '<p>Thank you, you are now registered to receive our newsletters!</p>';

		$_POST = array();
	}
	else{
		print '<p>There appears to be a problem with your email address. Please go back and try again.</p>';
	}
}

?>
