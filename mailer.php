<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $to = 'kannasivamps@gmail.com'; // replace with your email address
  $subject = 'New NithyaBeauty Leads';
  $headers = "From: ".$_POST['name']." \r\n";
  $headers = "Cc: gopikannaps@gmail.com.com\r\n"; // replace with CC email address
//   $headers = "Bcc: manojkannang67@gmail.com\r\n"; // replace with BCC email address
  $headers = "Content-type: text/html\r\n";
  $message = '<p>Hai Admin</p>';
    $message = '<p><strong>Name:</strong> '.$_POST['name'].'</p>';
     $message .= '<p><strong>Mobile:</strong> '.$_POST['mobile'].'</p>';
       $message .= '<p><strong>Email:</strong> '.$_POST['email'].'</p>';
  $message .= '<p><strong>Courses:</strong> '.$_POST['courses'].'</p>';

//   echo $message .= '<p><strong>Tell us more about the business you are looking to start:</strong> '.$_POST['msg'].'</p>';
// exit();
  if (mail($to, $subject, $message, $headers)) {
    echo "<script>window.location.href='thank-you.php';</script>";
    exit();
  } else {
    echo 'Sorry, there was a problem sending your message.';
  }
}
