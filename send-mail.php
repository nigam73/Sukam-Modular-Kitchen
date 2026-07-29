<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $fullname = $_POST['fullname'];
    $phone    = $_POST['phone'];
    $email    = $_POST['email'];
    $service  = $_POST['service'];
    $message  = $_POST['message'];

    $to = "info@sukaminterior.in";
    $subject = "New Enquiry From Website";

    $body = "
    Full Name: $fullname

    Phone Number: $phone

    Email Address: $email

    Service Required: $service

    Project Details:
    $message
    ";

    $headers = "From: noreply@sukaminterior.in\r\n";
    $headers .= "Reply-To: $email\r\n";

    if(mail($to, $subject, $body, $headers)){
        echo "<script>
                alert('Enquiry Sent Successfully');
                window.history.back();
              </script>";
    } else {
        echo "<script>
                alert('Failed to Send Enquiry');
                window.history.back();
              </script>";
    }
}
?>