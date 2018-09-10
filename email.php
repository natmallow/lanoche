<?php
session_start();

//error_reporting(0);
//
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

if ($_POST['submitted'] == "yes") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $message = $_POST["comments"];
    $subject = $_POST["emailSubject"];
    
    $EmailTo = "lanochedrink@gmail.com";
    $Subject = (isset($subject))? $subject : "No Subject";

    // prepare email body text
    $Body .= "Name: ";
    $Body .= $name;
    $Body .= "\n";

    $Body .= "Email: ";
    $Body .= $email;
    $Body .= "\n";
    
    $Body .= "Address: ";
    $Body .= $address;
    $Body .= "\n";
    
    $Body .= "Message: ";
    $Body .= $message;
    $Body .= "\n";

    // send email
    $success = mail($EmailTo, "La Noche Web Site: ".$Subject, $Body, "From:" . $email);

    // redirect to success page
if ($success) {
        $_SESSION['emailResponse'] = "Message Sent";
        header("location: home.php#contact");
        //echo "success";
    } else {
        $_SESSION['emailResponse'] = "Message Could not be sent. <br />Please email to lanochedrink@gmail.com";
        header("location: home.php#contact");
        //echo "invalid";
    }  
}  

    header("location: home.php#contact");
