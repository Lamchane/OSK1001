<?php
//get data from form  
$firstname = $_POST['firstname'];
$lastname= $_POST['lastname'];
$city= $_POST['city'];
$email= $_POST['email'];
$mobilenumber= $_POST['mobilenumber'];
$budget= $_POST['budget'];
$to = "sagargurung9001@gmail.com";
$subject = "Mail From OSK";
$txt ="Firstname = ". $firstname . "\r\n  Lastname = " . $lastname . "\r\n City =" . $city . "\r\n Email = " .$email . "\r\n Mobilenumber = " .$mobilenumber . "\r\n Budget = " .$budget;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>