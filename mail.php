<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email= $_POST['email'];
$country= $_POST['country'];
$message= $_POST['message'];
$topic= $_POST['topic'];

$subject = "New Enquiry From " . $country . "- info@shop.propkaart.in";
$to = "info@propkaart.in,info@shop.propkaart.in";
$txt = "Full Name : " . $name . "\r\nContact Number : " . $phone . "\r\nEmail : " . $email ."\r\nSubject : " . $topic . "\r\nMessage : " . $message;
$subject = " $subject";
$headers = "From: " . $email;

if (mail($to, $subject, $txt, $headers)) {
    // If email sent successfully, set JavaScript alert and redirect to index.html
    echo '<script> window.location.href = "index.html";alert("Message sent successfully. Our team will connect with you shortly. Thank you for your enquiry.");</script>';
    exit(); // Make sure to exit after redirecting
} else {
    // If email failed to send, return error message
    $alert_message = "Something went wrong";
    $alert_type = "failure";
}

?>
