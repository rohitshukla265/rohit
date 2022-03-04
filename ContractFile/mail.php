<?php
//get data from form  
$order = $_POST['name'];
$name = $_POST['name'];
$number = $_POST['quantity'];
$email= $_POST['Email'];
$number= $_POST['number'];
$date= $_POST['date'];
$time= $_POST['time'];
$to = "kedargughane04@mail.com";
$subject = "Mail From Sophia";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Order=" . $order "\r\n Mobile Number =" . $number "\r\n Quantity =" . $number "\r\n Date =" . $date "\r\n time =" . $time;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:Thankyou.html");
?>





















