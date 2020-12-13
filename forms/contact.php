<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'divyanallapaneni@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $email_form='divyanallapaneni@gmail.com';
   $email_subject="New Form Submission";
   $email_body="User Name: $name.\n".
		"User Email: $visior_email.\n".
                 "User Message: $message.\n";

   $to="nsdc.nlr@gmail.com";
   $headers ="From" $email_from \r\n";
   $headers ="Reply-To: $visitor_email \r\n";
   
   mail($to,$email_subject,$email_body,$headers);
   header("Location: idex.html");
?>
