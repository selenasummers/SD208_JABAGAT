<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function fizzBuzz(){
        for($i=1; $i <= 100; $i++){
            if($i%3 != 0 && $i%5 != 0){
                echo ($i);
            }
            if($i%3 == 0){
                echo "Fizz";
            }
            if($i%5 == 0){
                echo "Buzz";
            }
            echo "<br/>";       
        }
    }
    fizzBuzz();
    ?>
</body>
</html>