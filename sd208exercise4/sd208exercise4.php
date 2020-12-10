<?php
    include "form-handler.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Margarine' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Registration Form with Validation Activity</title>
</head>
<body>

<center>
    <div class="register">
        <img src="exoplanet.jpg" alt="EXOPLANET" class="side-pic-register">
        <div class="register-form">
            <img src="saranghaja.png" alt="saranghaja">  
            <br><br>
            <form method="post" style="margin:auto" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

                <div class="input-container">
                    <i class="fa fa-user-circle icon"></i>
                    <input type="text" class="input-field" placeholder="First Name" name="fName" minlength="2" maxlength="25">
                        <span class="error" style="display:block; position: absolute; left: 60%; bottom: 71.5%; font-size: 12px;"> 
                            <?php echo $fNameErr;?>
                        </span>
                </div>
                <p></p>
               
                <div class="input-container">
                    <i class="fa fa-user-circle icon"></i>
                    <input type="text" class="input-field" placeholder="Last Name" name="lName" minlength="2" maxlength="25">
                        <span class="error" style="display:block; position: absolute; left: 60%; bottom: 65.2%; font-size: 12px;"> 
                            <?php echo $lNameErr;?>
                        </span>
                </div>
                <p></p>

                <div class="input-container">
                    <i class="fa fa-envelope icon"></i>
                    <input type="text" class="input-field" placeholder="Email Address" name="email" >
                        <span class="error" style="display:block; position: absolute; left: 60%; bottom: 58.8%; font-size: 12px;"> 
                            <?php echo $emailErr;?>
                        </span>
                </div>
                <p></p>

                <div class="input-container">
                    <i class="fa fa-address-book icon"></i> 
                    <input type="text" class="input-field" placeholder="Address" name="address">
                        <span class="error" style="display:block; position: absolute; left: 60%; bottom: 52.5%; font-size: 12px;"> 
                            <?php echo $addressErr;?>
                        </span>
                </div>
                <p></p>

                <!-- Submit Button -->
                <input type="submit" value="Submit" >  
                <br><br>
    
                <?php 
                    echo "Your Input: ";
                    echo "<br><br>";
                    echo "Name: " , $lName , ", " , $fName;
                    echo "<br>";
                    echo "Email Address: " , $email;
                    echo "<br>";
                    echo "Address: " , $address;
                ?>
            </form>
            <br>
            <img src="weareone.png" alt="We Are One"><br><br>
        </div>
    </div>    

</body>
</html>
