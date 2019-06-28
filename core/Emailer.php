<?php
namespace App\Core ; 


trait Emailer { 


  public function name($value='')
  {

  }

  public function sendEmail($mail){
    try { 
      error_reporting(-1); 
      ini_set('display_errors', 'On');
      set_error_handler("var_dump");
      ini_set("mail.log", "/tmp/mail.log");
      ini_set("mail.add_x_header", TRUE);
      $subject = 'Email Subject'; 
      $message = 'This is the email message body'; 
      $headers = implode("\r\n", [   'From: webmaster@example.com',  'Reply-To: webmaster@example.com',    'X-Mailer: PHP/' . PHP_VERSION ]);
      
  // Send the email
      $result = mail($mail, $subject, $message, $headers);
  // Check the results and react accordingly
      if ($result) {
        header('Location: http://example.com/path/to/thank-you.php', true, 303); 
        exit;
      } else {

      }
    } catch(EmailNotSentException $ex){
      echo $ex;
    }

    
  }


  public function sendEmailWithAttachment(){
    $to = "recipient@email.com";
  }

}
