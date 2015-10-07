<?php
ini_set("include_path", '/home3/wupf/php:' . ini_get("include_path")  );


	/*
		REQUIRES
			pear
			pear mail

		INSTALL - on Ubuntu 14.04
			sudo apt-get install pear
			sudo pear install -a mail
	*/

	require_once "Mail.php";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$subjectForm = $_POST['subject'];
	$message = $_POST['message'];

	$from = 'noreply@magiclandscaping.com';
	$to = 'phpmailtest@mailinator.com';
	$subject = "[NOREPLY] New contact " . $name . " from landing page";
	$body = "Name: " . $name . "  |  Email: " . $email . "  |  Phone: " . $phone . "	|	Subject: " . $subjectForm . " | Message: " . $message .;

	$headers = array(
	'From' => $from,
	'To' => $to,
	'Subject' => $subject
	);

	$smtp = Mail::factory('smtp', array(
	    'host' => 'gator4237.hostgator.com',
	    'port' => '25',
	    'auth' => true,
	    'username' => '',
	    'password' => ''
	));

	$mail = $smtp->send($to, $headers, $body);

	if (PEAR::isError($mail)) {
		echo('There was a problem handling your request, please try again');
		http_response_code(500);		
	} else {
		echo('Message received, thanks!');
	}

?>