
<?php

    include "sql-connect.php";

    if(isset($_POST["submit"])){
        $lname = $_POST["lastname"];
        $fname = $_POST["firstname"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        //define sql query
        $sql = "INSERT INTO `logins`(`lastname`,`firstname`,`email`,`password`) VALUES('$lname','$fname','$email','$password')";

        //check the query if its executed well
        if(mysqli_query($conn, $sql)){
            echo "Inserted new row";
            header("location: registration_list.php");
        }else{
            echo "ERROR: ". mysqli_error($conn);
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>EXERCISE 7</title>
</head>
<body>
    <div class="container">
        <div class="overlay-text">
            <br><br><br><br><br>
            <img src="sample-logo.png" class="logo" alt="sample-logo"> 
            <h1 class="h1-fir">Welcome</h1>
            <h1 class="h1-sec">Onboard!</h1>
            <p class="comment">We'll be in touch♥</p>
            <br>
            <form method="POST" style="margin-left: 60px; font-size: 20px;" action="index.php">
                <div class="input-container">
                    <i class="fa fa-user-circle icon"></i>
                    <input class="input-field" type="text" name="lastname" placeholder="Last Name" required minlength=2 maxlength=25>
                </div>
                <div class="input-container">
                    <i class="fa fa-user-circle icon"></i>
                    <input class="input-field" type="text" name="firstname" placeholder="First Name" required minlength=2 maxlength=25>
                </div>
                <div class="input-container">
                    <i class="fa fa-envelope icon"></i>
                    <input class="input-field" type="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="input-container">
                    <i class="fa fa-key icon"></i> 
                    <input class="input-field" type="password" name="password" placeholder="Password" required minlength=8>
                </div>
                <input class="submit-button" type="submit" name="submit" value="Sign Up" >  
            </form>
        </div>
    </div>

</body>
</html>
