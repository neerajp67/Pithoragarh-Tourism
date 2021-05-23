<? php 
	$name = $_POST['name'];
	$visitor_email = $_Post['email'];
	$message = $_POST['message'];
	
	
	$email_from = 'admin@visitpithoragarh.online';
	$email_subject = "New Form Submission";
	$email_body ="User Name: $name.\"n.
				"User Email: $visitor_email.\n".
				"User Message: $message.\n";
				
	$to = "pahadtourism@gmail.com";
	$header = "From: $email_from \r\n";
	$header = "Reply-To: $email_from \r\n";
	mail($to,$email_subject,$email_body,$headers);
	header("Location: contact.html");  
?> 