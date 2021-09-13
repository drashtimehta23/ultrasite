<?php
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$visitor_email = $_POST['email'];
$visitor_phone = $_POST['phone'];
$message = $_POST['message'];


$email_form = 'contact@tutordudes.com';

$email_subject = 'New Contact Form Submission';

$email_body = "User FirstName: $first_name.\n".
                "User LastName: $last_name.\n".  
                    "User Email: $visitor_email.\n".
                        "User Phone: $visitor_phone.\n".
                            "User Message: $message.\n";

$to = 'contact@tutordudes.com';

$headers = "From: $email_from \r\n";

$headers = "Reply: $visitors_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>

 