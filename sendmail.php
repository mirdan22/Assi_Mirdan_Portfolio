<?php

require_once('connect.php');

/// form content
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$msg = $_POST['comments'];

$errors = [];

//form_elements

$fname = trim($fname);
$lname = trim($lname);
$email = trim($email);
$msg = trim($msg);

if(empty($lname)) {
    $errors['last_name'] = 'Please provide your first name';
}

if(empty($fname)) {
    $errors['first_name'] = 'Please provide your last name';
}

if(empty($msg)) {
    $errors['comments'] = 'Please fill the comment field';
}

if(empty($email)) {
    $errors['email'] = 'Please provide provide an email';
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'Please provide a REAL email';
}

if(empty($errors)) {

    // contacts table values

    $query = "INSERT INTO contacts (last_name,first_name, email, comments) VALUES('$lname','$fname','$email','$msg')";

    if(mysqli_query($connect, $query)) {

//format and send these values in an email

$to = 'm_assi@fanshaweonline.ca';
$subject = 'Message from your Portfolio site!';

$message = "You have received a new contact form submission:\n\n";
$message .= "Name: ".$fname." ".$lname."\n";
$message .= "Email: ".$email."\n\n";
// thank you messege 

mail($to,$subject,$message);

header('Location: thank_you.php');

}


}


?>