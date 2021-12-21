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

<?php


$emailTo = "afshal.ahmed21@gmial.com";
$emailIdentifier =  "Message sent via contact form " . $_SERVER["SERVER_NAME"];
$errrorEmptyField = "* This Field is required!";
$errrorEmailInvalid = "* This Email is Invalid!";
$successMessage = "* The Email was Sent Successfully!";


if($_POST) {

    $send = addslashes(trim($_POST["send"]));
    $user_email = addslashes(trim($_POST["userEmail"]));
    $first_name = addslashes(trim($_POST["firstName"]));
    $last_name = addslashes(trim($_POST["lastName"]));

    $array = array("userEmail" => "", "firstName" => "", "lastName" => "","succesMessage" => "");

    if($name == "") {
    	$array["userEmail"] = $errrorEmptyField;
    }
	
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $array["firstName"] = $errrorEmailInvalid;
    }
	
    if($name != "" && filter_var($email, FILTER_VALIDATE_EMAIL)) {
		
		$array["succesMessage"] = $successMessage;
		
		$headers  = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: " . $name . " <" . $email .">\r\n";
		$headers .= "Reply-To: " . $email;
		
		
	$message2 = '<html><body>';
    $message2 .= "<p style='color:#000'> <strong>Get in Touch:</strong>" . $send . "</p>";
    $message2 .= "<p style='color:#000'> <strong>Name:</strong>" . $user_email . "</p>";
    $message2 .= "<p style='color:#000'> <strong>Company:</strong>" . $first_name . "</p>";
    $message2 .= "<p style='color:#000'> <strong>Email:</strong>" . $last_name . "</p>";
    $message2 .= '</body></html>';
		
		mail($emailTo, $emailIdentifier, $message2, $headers);
		
    }
    require_once "newsletter.php";

}

?>