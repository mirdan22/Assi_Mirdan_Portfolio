<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'tbl_users';

    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    $errors = array();

    $lname = mysqli_real_escape_string($connection, $_POST['lname']);
    if ($lname == NULL) {
        $errors[] = "Last name field is empty.";
    }

    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    if ($fname == NULL) {
        $errors[] = "First name field is empty.";
    }

    $message = mysqli_real_escape_string($connection, $_POST['message']);
    if ($city == NULL) {
        $errors[] = "message field is empty.";
    }

    $email = $_POST['email'];
    if ($email == NULL) {
        $errors[] = "Email field is empty.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "\"" . $email . "\" is not a valid email address.";
    }

    $errcount = count($errors);
    if ($errcount > 0) {
        $errmsg = array();
        for ($i = 0; $i < $errcount; $i++) {
            $errmsg[] = $errors[$i];
        }
        echo json_encode(array("errors" => $errmsg));
    } else {
        $querystring = "INSERT INTO tbl_users(user_id,user_lname,user_fname,user_message,user_email) VALUES(NULL,'" . $lname . "','" . $fname . "','" . $message . "','" . $email . "')";
        $qpartner = mysqli_query($connection, $querystring);
        echo json_encode(array("message" => "Message sent successfully. Thank you for your interest!"));
    }
?>