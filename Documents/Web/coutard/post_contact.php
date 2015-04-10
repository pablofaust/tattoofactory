<?php

// codigo tomado de algun lugar en la red
// INGRESE EL EMAIL DONDE RECIBIRÁ LOS DATOS DEL FOMULARIO
$for = 'pabfaust@gmail.com'; 
 
$subject = "Message envoyé depuis ouestdrapeaux.com"; 
 
$mailheader = "From: ".$_POST["name"]."<".$_POST["email"].">\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
 
$MESSAGE_BODY = "Nom: ".$_POST["name"]."<br>"; 
$MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>"; 
$MESSAGE_BODY .= "Message: ".nl2br($_POST["message"])."<br>"; 
 
mail( $for, $subject, $MESSAGE_BODY, $mailheader) or die ("Votre message n'a pas pu être envoyé, veuillez réviser vos informations."); 
 
echo "<script>alert('Merci, votre message nous a bien été envoyé ! On vous répondra au plus vite !')</script>";
echo "<SCRIPT>history.back(1)</SCRIPT>"; 
 
?>