<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="auto" cellspacing="0px" border="1px" align = "center">
        <?php
            for($ver=1; $ver<=8; $ver++){
                for($hori=1; $hori<=8; $hori++){
                    $box=$ver+$hori;
                    if($box%2==0){
                        echo "<td height=50px width=50px bgcolor=white></td>";
                    }else{
                        echo "<td height=50px width=50px bgcolor=black></td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>