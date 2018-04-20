<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$sent = false; 

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'collection.scotty@gmail.com';                 // SMTP username
    $mail->Password = 'Scotty2005';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    header('Content-Type: application/json');
    if ($name === ''){
      print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
      exit();
    }
    if ($email === ''){
      print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
      exit();
    } else {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
      exit();
      }
    }
    if ($subject === ''){
      print json_encode(array('message' => 'Subject cannot be empty', 'code' => 0));
      exit();
    }
    if ($message === ''){
      print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
      exit();
    }

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('collection.scotty@gmail.com', 'Scott Langdon');     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = "From: $name <br> \nEmail: $email <br> \nMessage: $message";
    $mail->send();
    $myObj = array('message' => 'Email successfully sent!', 'code' => 1);
    $myJSON = json_encode($myObj);
    print $myJSON;
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
