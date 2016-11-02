<?php
$referrer = $_SERVER['HTTP_REFERER'];
if (!preg_match("index.html",$referrer)) {
header('Location: http://www.aie.net.in');
} ;
$to = "agrawal.divya22@gmail.com";
$subject = "From AIE Website";
$message_body = "Name: ".$_POST["name"] .'<br>'; 
$message_body = "Email: ".$_POST["email"] .'<br>'; 
$message_body = "Subject: ".$_POST["subject"] .'<br>';
$message_body = "Message: ".$_POST["message"] .'<br>'; 
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$from = $_POST['email'] ;
$headers .= 'From: ' . $from . "\r\n";
mail($to,$subject,$message_body,$headers);
header("location:index.html"); 
?>