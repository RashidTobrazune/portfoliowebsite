<?php  
if( isset($_POST['submit']) ) {
//getting user data
$firstName = $_POST['name'];
$fromEmail = $_POST['email'];
$message = $_POST['message'];


//Recipient email, Replace with your email Address
$mailTo = 'tobrazunerashid@gmail.com';

//email subject
$subject = ' A New Message Received From ' .$firstName;

//email message body
$htmlContent = '<h2> Email Request Received </h2>
<p> <b>Client Name: </b> '.$firstName .'</p>
<p> <b>Email: </b> '.$fromEmail .'</p>
<p> <b>Message: </b> '.$message .'</p>';

//header for sender info
$headers = "From: " .$firstName . "<". $fromEmail . ">";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

//PHP mailer function
 $result = mail($mailTo, $subject, $htmlContent, $headers);

   //error checking
   if($result) {
    $success = "The message was sent successfully!";
   } else {
    $failed = "Error: Message was not sent, Try again Later";
   }
}
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300&family=Montserrat:wght@400;500&family=Roboto+Serif:opsz,wght@8..144,300&display=swap" rel="stylesheet">
    <title>Rashid says Thank you.</title>
    <link rel="icon" href="rsign.png">
    <style>
        *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    outline: none;
     border: none;
     scroll-behavior: smooth;
     text-decoration: none;
}
:root{
    --bg-color : #e6ffff;
    --second-bg-color: #4dffff;
    --text-color: #4d4d4d;
    --main-color: #009999;
}

body{
    background: var(--bg-color);
    color:  var(--text-color);
}
        /*lastpage*/
.lastpage{
    font-family: "Montserrat", sans-serif;
font-family: "Montserrat Alternates", sans-serif;
font-family: "Roboto Serif", serif;
background: var(--bg-color);
color: var(--text-color);
width: 50vw;
height: 60vh;
margin-left: 15em;
margin-top: 3em;
}
.last{
    font-size: 2em;
}
.last{
    padding-bottom: 1.3em;
}
.lasts a{
color: var(--main-color);
text-decoration: none;
margin-left: .45em;
}
    </style>
</head>
<body>
    <div class="lastpage">
   <p class="last">
     I want to take a moment to express my gratitude for your email. 
     Your message was much appreciated, and I am thankful regarding the information and insights you shared.
    Thank you. I will get back to you as soon as possible.
   </p>
   <span class="lasts">Go back to the<a href="index.html">Homepage.</a></span>
   
    </div>
</body>
</html>


';



?>