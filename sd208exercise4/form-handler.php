
<?php
    // define variables and set to empty values
    $fNameErr = $lNameErr = $emailErr =  $addressErr = "";
    $fName = $lName = $email = $address = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        if(empty($_POST["fName"])){
            $fNameErr = "*First Name is required";
        }else{
            $fName = test_input($_POST["fName"]);
                // check if name only contains letters and whitespace
            if(!preg_match("/^[a-zA-Z-' ]*$/",$fName)){
                $fNameErr = "*Invalid Firstname";
            }
        }

        if(empty($_POST["lName"])){
            $lNameErr = "*Last Name is required";
        }else{
            $lName = test_input($_POST["lName"]);
                // check if name only contains letters and whitespace
            if(!preg_match("/^[a-zA-Z-' ]*$/",$lName)){
                $lNameErr = "*Invalid Lastname";
            }
        }
        
        if(empty($_POST["email"])){
            $emailErr = "*Email is required";
        }else{
            $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "*Invalid email format";
            }
        }

        if(empty($_POST["address"])){
            $addressErr = "*Address is required";
        }else{
            $address = test_input($_POST["address"]);
                // check if name only contains letters and whitespace
            if(preg_match("/^[a-zA-Z0-9,]*$/",$address)){
                $addressErr = "*Invalid Address";
            }
        }


    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>
