<?php
    session_start();
   
    $book  = (isset($_SESSION['bookmarks'])) ? $_SESSION['bookmarks']:array();

    if(isset($_POST['addBookmark'])){
        if(!empty($_POST["bookmarkName"]) && !empty($_POST["bookmarkUrl"])){
            array_push($book, [$_POST['bookmarkName'] ,$_POST['bookmarkUrl']]);
            $_SESSION['bookmarks'] = $book;
        }
    }

    if(isset($_POST['x'])){
        array_splice($_SESSION['bookmarks'], $_POST['id'], 1);
    }

    if (isset($_POST['clearBookmark'])){
        $_SESSION['bookmarks'] = [];
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
    <title>BOOKMARK</title>
</head>

<body>

    <div class="container">
        <div class="overlay-text">
        <br><br><br><br><br><br><br><br><br>
        <h1>Bookmarker..</h1>
        <br>
            <form method="POST" style="margin-left: 60px; font-size: 20px;" action="index.php">

                Website Name<br>
                <input class="input-field" type="text" name="bookmarkName" placeholder="Website Name"><br>

                Website URL<br>    
                <input class="input-field" type="text" name="bookmarkUrl" placeholder="Website URL" ><br>

                <input class="submit-button" type="submit" name="addBookmark" value="ADD BOOKMARK"><br>
                <input class="clear-button" type="submit" name="clearBookmark" value="CLEAR ALL">

            </form>
        </div>
    </div>

    <br><br><br><br><br>

    <div class="bookmarks-display">
        <?php 
            if(isset($_SESSION['bookmarks'])):
        ?>
            
        <?php for($id= 0; $id < count($_SESSION['bookmarks']); $id++):?>
            <form action="index.php" method="POST">
                <input type="hidden" name ="id" value="<?php echo $id;?>">
                <input class="x-button" name="x" type="submit" value="X">
            <a class="bookmarks-list" href= '<?php echo $_SESSION['bookmarks'][$id][1];?>'target ="_blank"> <?php echo $_SESSION['bookmarks'][$id][0];?> </a>
            </form> 
        <?php endfor?>
        <?php endif?>
    </div>


</body>
</html>