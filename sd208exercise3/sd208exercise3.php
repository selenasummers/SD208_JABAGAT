<?php 
    if(isset($_POST["convertButton"])) {
        /* Grab value from textarea is $_POST collection, make all letters lowercase using strtolower() function store in a variable*/
        $clickBait = strtolower($_POST["clickBaitHeadline"]);
        
        $clickbait_words = array("scientists", "doctors", "hate", "stupid", "weird", "simple", "tricked", "shocked me", "you'll never believe", "hack", "epic", "unbelievable");
        $replacement_words = array("so-called scientists", "so-called doctors", "aren't threatened by", "average", "completely normal", "ineffective", "method", "is no different than the others", "you won't really be surprised by", "slightly improve", "boring", "normal");
        
        /* Use the str_replace() function to replace the words uppercase the first letter in every word using ucwords() function store in a variable */
        $honestHeadline = str_replace($clickbait_words, $replacement_words, $clickBait);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Marcellus SC' rel='stylesheet'>
        <title>Honest Click Bait Headlines Activity</title>
    </head>
    
    <body>
        <br>
        <br>
        <div class="container">
            <h1>Honest Click Bait Headlines</h1>
    
            <div class="row">
                <form method="post">
                    <textarea placeholder="Paste click bait headline here." name="clickBaitHeadline"></textarea>
                    <br>
                    <button type="submit" name="convertButton">Make Honest!</button>
                </form>
            </div>
            <br>

            <?php
                if(isset($_POST["convertButton"])) {
                    /* Use ucwords() function to uppercase first letter in every word, echo the variable on the screen */
                    echo "<h2 class=bait>Original Headline</h2><br><h3>".ucwords($clickBait)."<hr></h3>";   
                    
                    //echo the honest headline
                    echo "<h2 class=honest>Honest Headline</h2><br><h3>".ucwords($honestHeadline)."</h3>";   
                }
            ?>          
        </div>

    </body>
</html>


