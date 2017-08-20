<?php
session_start();
foreach($_POST as $key => $item)
{
    if($key == "n6")
    {
        $_SESSION["neuroticism"] += $item;
        $_SESSION["vulnerability"] += $item;
    }
    else if($key == "e6")
    {
        $_SESSION["extraversion"] += $item;
        $_SESSION["cheerfulness"] += $item;
    }
    else if($key == "o6")
    {
        $_SESSION["openness"] += $item;
        $_SESSION["liberalism"] += $item;
    }
    else if($key == "a6")
    {
        $_SESSION["agreeableness"] += $item;
        $_SESSION["sympathy"] += $item;
    }
    else if($key == "c6")
    {
        $_SESSION["conscientiousness"] += $item;
        $_SESSION["cautiousness"] += $item;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="quizStyle.css">
    <link rel="stylesheet" href="style.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>The Personality Quiz!</title>
</head>
<body>
    <p class="pars text-center">You have finished the test! We need to figure out how to score it and store<br>
    some results. We will do that in coming weeks, after we learn some PHP. Woohoo!</p>
    <?php
    print_r($_SESSION);
    ?>
</body>
</html>