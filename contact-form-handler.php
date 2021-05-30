<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'sutchwald@yahoo.com'

    $email_subject = "New Form Submission"

    $email_body = "Name: $name .\n"
                    "Email:" $visitor_email.\n"
                        "Message: $message.\n";

    to = "chriskevinandrade@gmail.com";

    $headers = "From: $email_from \r \n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");

?>