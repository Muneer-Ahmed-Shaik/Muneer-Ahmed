<?php

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
	$message = $_POST['message'];
    

    $to = "muneer.ahmed.jobs@gmail.com";
    $subject = "Web Email: Request from Recruiter $name ";
    
    mail($to, $subject, $message, "From: ".$email);
echo "Your message has be sent succefully";


?>