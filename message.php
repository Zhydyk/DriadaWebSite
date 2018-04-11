<?php

 
$adminemail = "litodriada@gmail.com";
$date = date("d.m.y"); 
$time = date("H:i"); 
$backurl = "http://www.litodriada.com.ua";  
$headers = 'From: $email' . "\r\n" .
   'Reply-To: $adminemail';

 
$name = $_POST['name']; 
$email = $_POST['email']; 
$msg = $_POST['message']; 

include('config.php'); 
$result = $db->query("INSERT INTO `vidhyku`(`id`, `name`, `email`, `message`) VALUES (NULL,'$name','$email','$msg')");

if (!preg_match("|^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is", strtolower($email))){ 
 	 echo "<center>Поверніться <a href='javascript:history.back(1)'><B>назад</B></a>. Ви вказали невірні дані"; 
} else { 
	$msg=" <p>Ім'я: $name</p> <p>E-mail: $email</p> <p>Повідомлення: $msg</p> "; 
	mail("$headers", "$date $time Повідомлення від $name", "$msg","$headers");  
 	
	print "$msg <p>Повідомлення відправлено, зараз ви будете перенаправлені на головну сторінку</p>< <script language='Javascript'> 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000);</script>";  
	exit; 
 
 } 
 
?>
