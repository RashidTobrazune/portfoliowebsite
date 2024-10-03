<!-- connect with php file -->
<?php include 'email.php'  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form id="contact" action="email.php" method="post">
            <h3>Contact Details</h3>
            <h4>Contact us today, and get reply with in 24 hours!</h4>
            <div class="row">

                <div class="col">
                    <fieldset>
                        <input placeholder="First Name" name="firstName" type="text" tabindex="1" required autofocus>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Your Email Address" name="email" type="email" tabindex="2" required>
                    </fieldset>
                    <fieldset>
                        <input placeholder="Your Message" name="message" type="tel" tabindex="3" required>
                    </fieldset>

                </div>

                <!--<div class="col">
          
          <fieldset>
            <p>What is your employment status?</p>
            <div class="radio">
              <input type="radio" id="job" name="status" value="job">
              <label for="job">Employed</label>
            </div>
            <div class="radio"> 
              <input type="radio" id="business" name="status" value="business">
              <label for="business">Business</label>
          </div>
          <div class="radio">
              <input type="radio" id="student" name="status" value="student">
              <label for="student">Student</label>
            </div>
        </fieldset>-->
                <!--  <fieldset>
            <label for="file">Upload</label>
            <input type="file" id="file" name="file">
          </fieldset> -->
            </div>
    </div>

    <!-- Error display -->
    <div>
        <p class="success"> <?php echo $success;  ?> </p>
        <p class="failed"> <?php echo $failed;  ?> </p>
    </div>

    <fieldset>
        <button type="submit" name="submit" id="contact-submit" data-submit="...Sending">Submit Now</button>