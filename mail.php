<?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];


$EmailTo = "mul61943@gmail.com";
$Title = "Pesan Baru dari Rakyat";

// prepare email body text
$Fields .= "Nama: ";
$Fields .= $name;
$Fields .= "\n";

$Fields.= "Email: ";
$Fields .= $email;
$Fields .= "\n";

$Fields.= "Subyek: ";
$Fields .= $subject;
$Fields .= "\n";

$Fields .= "Pesan: ";
$Fields .= $message;
$Fields .= "\n";


// send email
$success = mail($EmailTo,  $Title,  $Fields, "From:".$email);

