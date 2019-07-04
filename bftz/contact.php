<html>
<body>

<?php



$email = $_POST['customer_mail'];




$body =
" 
Email: $email
";


// Enter your email address
$to ='berrell.md@gmail.com, info@bannedfromthezoo.com';

$send_contact=mail($to, 'SUBSCRIBE ME', $body);


// Check, if message sent to your email 
// display message "We've recived your information"
if($send_contact){
echo "Thanks! We've recived your contact information";
}
else {
echo "ERROR";
}
?>
</body>
</html>