<?php 

		$name = $_POST['name'];
		$visitor_email = $_POST['email'];
		$message = $_POST['message'];

		$email_from = 'k.developer.x@gmail.com';

		$email_subject = 'New Form Query!';

		$email_body = "Visitor Name : $name.\n".
						"Visitor Email : $visitor_email.\n".
							"Visitor Message : $message.\n";


	 $to ="nikeetomas55@gmail.com";

	 $headers = "Form : $email_from \r\n";
	 $headers .= "Reply-To : $visitor_email \r\n";

	$run = mail($to,$email_subject,$email_body,$headers);

    if($run)
	 	echo "<script>alert('Form Submitted!');location <a href='home.html';</script>";



 ?>
