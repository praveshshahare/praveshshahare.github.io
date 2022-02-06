<?php

$to = $_POST["to"];
$from = $_POST["from"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$body = "This is an Automated E-Mail Sent From www.mailforfree.tk. Please Do not reply if it is of no use. \n\n $message";

$headers = "From: $from";

mail($to,$subject,$body,$headers);

echo "Your Message Has Been Sent Successfully!!.";
?>