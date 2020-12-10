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
    <h1>CALCULATE YOUR BODY MASS INDEX</h1>
        <form method="GET" action="bmi.php">
            <div class="input-container">
            <i class="fa fa-tachometer icon"></i>
                <input class="input-field" type="text" name="weight" placeholder="Weight in kilogram (kg)" required><br>
            </div>
            <div class="input-container">
                <i class="fa fa-arrows-v icon" style="padding: 13px 16.5px; "></i>  
                <input class="input-field" type="text" name="height" placeholder="Height in meter (cm)" required><br>
            </div>

            <input type="submit" name="CALCULATE" value="CALCULATE">
            <br>
            <br>
            <br>
        </form>
    </div>

</center>
</body>
</html>






