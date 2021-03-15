<?php 
$to_email = 'emma_danckaert@live.be';
$from_email = $_POST['email'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $name . ' wrote the following:' . "\n\n" . $_POST['message'];
$headers = 'From: ' . $from_email;
mail($to_email,$subject,$message,$headers);
header("Location: /index.html", true, 301);
exit();
?>