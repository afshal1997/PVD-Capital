<?php
    $message='';
    if(!empty($_POST["send"])) {
            
        $email = $_POST["userEmail"];
        $first_name = $_POST["firstName"];
        $last_name = $_POST["lastName"];
        echo "$email"."$firts_name"."$last_name";
    
        $toEmail = "afshal.ahmed21@gmail.com";
        $mailHeaders = "From: " . "<". $email .">\r\n";
        if(mail($toEmail, $first_name, $last_name, $mailHeaders)) {
            $message = "Your contact information is received successfully.";
            $type = "success";
        }
    }
    require_once "newsletter.php";
?>