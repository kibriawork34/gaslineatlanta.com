<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  //ORIGINAL$gasline = isset($_POST['gasline']) ? 'Yes' : 'No';
  //ORIGINAL$plumbing = isset($_POST['plumbing']) ? 'Yes' : 'No';
  $gasline = isset($_POST['gasline']) ? 'Yes' : 'No';
  $plumbing = isset($_POST['plumbing']) ? 'Yes' : 'No';
  $message = $_POST['message'];
  
  // Construct email message
  $subject = 'Appointment Request From ATLANTA GAS PIPE SERVICES';
  $body = "Name: $name\nPhone: $phone\nEmail: $email\nGasline: $gasline\nPlumbing: $plumbing\nMessage: $message";
  $headers = "From: $email";
  
  // Send email
 // $to = 'kibriatest@gmail.com';
     $to = 'keikaplumbing@gmail.com';
  if (mail($to, $subject, $body, $headers)) {
    echo '<h5>Thank you for your appointment request!. We will contact you soon.</h5>';
  } else {
    echo '<p>There was an error submitting your appointment request. Please try again later.</p>';
  }
}
?>
