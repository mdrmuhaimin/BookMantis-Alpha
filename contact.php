<?php


		$name = $_POST['name'];
		$email = $_POST['email'];
	
		$emailTo = 'shahmeernavid@gmail.com';
		$subject = 'Coming Soon Page';
		$body = "Name: $name \n\nEmail: $email";
		$headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		$sent  = mail($emailTo, $subject, $body, $headers);
		
		
		
		
		echo $sent;
?>