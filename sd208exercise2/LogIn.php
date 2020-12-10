<?php
       if(isset($_POST['Login'])){
          header('location:index.php');
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
    <title>LOG IN FORM</title>
</head>

<body>
<center>
    <div class="login">
        <div class="login-form">
            <img src="weareone.png" alt="We Are One"><br><br>
            <img src="lightstick.jpg" alt="Lightstick" class="up-pic-login">
            <h4>EXO-K + EXO-L + EXO-M = ONE</h4>
            <h5>L-1485♥</h5>
            <form class="form" method="post" style="margin:auto"> 
                <div class="input-container">
                    <i class="fa fa-user o icon"></i>
                    <input class="input-field" type="text" placeholder="Username" required minlength=2 maxlength=15><br>
                </div>  
                <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" placeholder="Password" required minlength=8><br><br>
                </div> 

                <input type="submit" value="LOG IN" name="Login"><br><br>
                <p>Don't have an account?<a href="register.php"><br>Create Account</a></p>
            </form>      
        </div>
        <img src="ot12.jpg" alt="OT12" class="side-pic-login">
    </div>
</center>
</body>

</html>
