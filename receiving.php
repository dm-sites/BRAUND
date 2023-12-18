<?php 

error_reporting(-1);
if(isset($_POST['submit']))
{

$naam = $_POST['naam'];
$bedrijfsnaam = $_POST['bedrijfsnaam'];  
$telefoonnummer = $_POST['telefoonnummer'];  
$email = $_POST['email'];
$bericht = $_POST['bericht'];

$from_add = "BRAUND.nl"; 
$to_add = "stijn@braund.nl"; 
$subject = "Verzoek van " . $from_add;

if (empty($bericht)) {
  $bericht = "Leeg bericht";
}



$formatted_message = "Naam: $naam\n";
$formatted_message .= "Bedrijfsnaam: $bedrijfsnaam\n";
$formatted_message .= "Telefoonnummer: $telefoonnummer\n";
$formatted_message .= "Email: $email\n\n";
$formatted_message .= "Bericht:\n$bericht";


$headers = 'From: ' .$from_add. "\r\n" .

'Reply-To:' .$email. "\r\n";


if(mail($to_add,$subject,$formatted_message,$headers)) 
{



} 


header('HTTP/1.1 301 Moved Permanently');
header('Location: index.html');
die();
}

// else conditional statement for if(isset($_POST['submit']))
else {

}

?>