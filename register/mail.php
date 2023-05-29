<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from = "register@alchemist.or.id";
$to = "hammamfaiq@protonmail.com";
$subject = "Register User";
$message = $_POST[PESAN],$_POST[NAMA]:
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
echo "The registration request was sent." ;
?>