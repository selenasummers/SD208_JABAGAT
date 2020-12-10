<?php
       if(isset($_POST['Register'])){
          header('location:LogIn.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Margarine' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SIGN UP FORM</title>
</head>
<body>

<body>
<center>
    <div class="register">
        <img src="exoplanet.jpg" alt="EXOPLANET" class="side-pic-register">
        <div class="register-form">
            <img src="saranghaja.png" alt="saranghaja">
            <form class="form" method="post" style="margin:auto">
                <!-- First Name -->
                <br>
                <div class="input-container">
                    <i class="fa fa-user-circle icon"></i>  
                    <input class="input-field" type="text" placeholder="First Name" required minlength=2 maxlength=25><br>
                </div>  
                <!-- Last Name -->
                <div class="input-container">
                    <i class="fa fa-user-circle icon"></i>  
                    <input class="input-field" type="text" placeholder="Last Name" required minlength=2 maxlength=25><br>
                </div>  
                <!-- Address -->
                <div class="input-container">
                    <i class="fa fa-address-book icon"></i>  
                    <input class="input-field" type="text" placeholder="Address" required minlength=2 maxlength=100><br>
                </div> 
                <!-- Email Address -->
                <div class="input-container">
                    <i class="fa fa-envelope-o icon"></i>
                    <input class="input-field" type="email" placeholder="Email Address" required><br>
                </div> 
                <!-- Confirmation Email Address -->
                <div class="input-container">
                    <i class="fa fa-envelope icon"></i>
                    <input class="input-field" type="email" placeholder="Confirm Email Address" required><br>
                </div> 
                <!-- Password -->
                <div class="input-container">
                    <i class="fa fa-key icon"></i>
                    <input class="input-field" type="password" placeholder="Password" required minlength=8><br>
                </div> 
                <!-- Confirmation Password -->
                <div class="input-container">
                    <i class="fa fa-key icon"></i>
                    <input class="input-field" type="password" placeholder="Confirm Password" required minlength=8><br><br>
                </div> 
                
                <input type="submit" value="SIGN UP" name="Register"><br><br>
                <p class="msg">Already have an account?<a href="LogIn.php"><br>Log In</a></p>
            </form>
        </div>
    </div>
</center>
</body>
</html>


