<?php

    include("connect.php");

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phoneno = $_POST['phoneno'];

        $date = date("F, d Y");

        if(strlen($name) < 3)
        {
            $error = "Please enter at a valid name!";
        }
        else if(strlen($email) < 3)
        {
            $error = "Email is too short!";
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $error = "Please enter valid email address!";
        }
        else if (email_exist($email, $con))
        {
            $error = "Someone is already subscribed with this Email!";
        }
        else {

          $insertQuery = "INSERT INTO frootly (name, email, phoneno, date) VALUES ('$name', '$email', '$phoneno', '$date')";
          if(mysqli_query($con, $insertQuery))
          {

                header("location: frootly-home.html");

          }

        }
    }


?>
