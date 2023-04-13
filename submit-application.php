<?php
// Retrieve the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$position = $_POST['position'];
$cover_letter = $_POST['cover-letter'];

// Process the data (you can customize this to fit your needs)
// For this example, we're just going to send an email to the company's HR department with the applicant's information

// Set the recipient email address
$to = "hr@yourcompany.com";

// Set the email subject
$subject = "New job application for " . $position;

// Build the email message
$message = "Name: " . $name . "\r\n";
$message .= "Email: " . $email . "\r\n";
$message .= "Phone: " . $phone . "\r\n";
$message .= "Position: " . $position . "\r\n";
$message .= "Cover Letter: " . $cover_letter;

// Send the email
$headers = "From: " . $email . "\r\n" .
           "Reply-To: " . $email . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

if(mail($to, $subject, $message, $headers)) {
  // Email sent successfully
  echo "Thank you for your application!";
} else {
  // Error sending email
  echo "There was an error processing your application. Please try again later.";
}
?>
