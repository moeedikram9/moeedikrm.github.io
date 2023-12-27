<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Replace with your real receiving email address
  $receiving_email_address = 'moeedikram3@gmail.com';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $headers = "From: $name <$email>" . "\r\n";
  
  if (mail($receiving_email_address, $subject, $message, $headers)) {
    echo "1"; // Indicates success
  } else {
    echo "0"; // Indicates failure
  }
} else {
  echo "Invalid request";
}
?>
