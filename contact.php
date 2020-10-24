<?php

if (isset($_POST['submit'])) { 
    $name = $_POST['name'];
    $email = "info@auberon.co.in";//$_POST['email'];
    $ToEmail = 'info@auberon.co.in';
    $contact = $_POST['contact']; 
    $mailheader = "From: ".$email."\r\n"; 
    $mailheader .= "Reply-To: ".$ToEmail."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Name: ".$_POST["name"]."<br>"; 
    $MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>"; 
    $MESSAGE_BODY .= "Website:".$_POST['contact']."<br />";  
    $MESSAGE_BODY .= "Message: ".nl2br($_POST["message"])."<br>";

    if(mail($ToEmail, $website, $MESSAGE_BODY, $mailheader)) {
        echo "<script>alert('Mail was sent !');</script>";
        echo "<script>window.location.href='http://auberon.co.in/contactus.php'</script>";
    }
    else {
        echo "<script>alert('Mail was not sent. Please try again later');</script>";
    }
}