<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from = "register@alchemist.or.id";
$to = "hammamfaiq@protonmail.com";
$subject = "Register User";
$message = $_POST[first_name],$_POST[last_name],$_POST[school],$_POST[email],$_POST[area_code],$_POST[phone],$_POST[subject],$_POST[exist];
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
echo "The registration request was sent." ;
?>