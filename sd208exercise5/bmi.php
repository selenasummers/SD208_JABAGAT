<?php 
    if ($_GET['CALCULATE']) { 
        $weight = $_GET['weight'];
        $height = $_GET['height'];
        function bmi($weight,$height) {
        $bmi = ($weight/$height/$height)*10000;
    return $bmi;
    } 

    $bmi = bmi($weight,$height);
        if ($bmi <= 18.5) {
            $output = "UNDER WEIGHT";
        } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
            $output = "NORMAL";
        } else if ($bmi > 24.9 AND $bmi<=29.9) {
            $output = "OVER WEIGHT";
        } else if ($bmi > 30.0) {
            $output = "OBESE";
        }

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
    <title>PHP BMI(Body Mass Index) Calculator Activity</title>
</head>
<body>


<center>
<div class="container">
    <h1>Your RESULT<i class="fa fa-check"></i></h1>
        <?php echo 'BMI value is: ' . $bmi; ?>
        <br>
        <?php echo 'Category: ' . $output; ?>
        <br>
        <br>
        <form method="GET" action="bmi-input.php">
            <input type="submit" name="Back" value="Back">
        </form>
</div>
</center>

</body>
</html>







