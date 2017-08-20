<?php
session_start();
foreach($_POST as $key => $item)
{
    if($key == "n4")
    {
        $_SESSION["neuroticism"] += $item;
        $_SESSION["self-consciousness"] += $item;
    }
    else if($key == "e4")
    {
        $_SESSION["extraversion"] += $item;
        $_SESSION["activity-level"] += $item;
    }
    else if($key == "o4")
    {
        $_SESSION["openness"] += $item;
        $_SESSION["adventurousness"] += $item;
    }
    else if($key == "a4")
    {
        $_SESSION["agreeableness"] += $item;
        $_SESSION["cooperation"] += $item;
    }
    else if($key == "c4")
    {
        $_SESSION["conscientiousness"] += $item;
        $_SESSION["achievement-striving"] += $item;
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
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>The IPIP 120-Question Personality Quiz</title>
    <link rel="shortcut icon" type="image/png" href="question-head-two-16-270712.png">
</head>
<body>

<div class="container">
    <h1 class="text-center">This is page 5 of our quiz.<br> <small>Please answer all questions.</small></h1>
    <br>
    <p style="color:red;" class="text-center"><strong>Please do not click back or refresh during the quiz, or you may get inaccurate results.</strong></p>

</div>
<form action="tablequiz6.php" method="post">
    <div class="table1">
        <table class="table table-striped">
            <thead>
            <tr>
                <th></th>
                <th>Completely <br> Disagree</th>
                <th>Somewhat <br>Disagree</th>
                <th>Neither</th>
                <th>Somewhat<br> Agree</th>
                <th>Completely<br> Agree</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="questions">21. I go on binges.</td>
                <td style="text-align:center"><input type="radio" name="n5" value="1" required/></td>
                <td style="text-align:center"><input type="radio" name="n5" value="2"/></td>
                <td style="text-align:center"><input type="radio" name="n5" value="3"/></td>
                <td style="text-align:center"><input type="radio" name="n5" value="4"/></td>
                <td style="text-align:center"><input type="radio" name="n5" value="5"/></td>
            </tr>
            <tr>
                <td class="questions">22. I love excitement...!!</td>
                <td style="text-align:center"><input type="radio" name="e5" value="1" required/></td>
                <td style="text-align:center"><input type="radio" name="e5" value="2"/></td>
                <td style="text-align:center"><input type="radio" name="e5" value="3"/></td>
                <td style="text-align:center"><input type="radio" name="e5" value="4"/></td>
                <td style="text-align:center"><input type="radio" name="e5" value="5"/></td>
            </tr>
            <tr>
                <td class="questions">23. I love to read challenging material.</td>
                <td style="text-align:center"><input type="radio" name="o5" value="1" required/></td>
                <td style="text-align:center"><input type="radio" name="o5" value="2"/></td>
                <td style="text-align:center"><input type="radio" name="o5" value="3"/></td>
                <td style="text-align:center"><input type="radio" name="o5" value="4"/></td>
                <td style="text-align:center"><input type="radio" name="o5" value="5"/></td>
            </tr>
            <tr>
                <td class="questions">24. I believe that I am better than others.</td>
                <td style="text-align:center"><input type="radio" name="a5" value="5" required/></td>
                <td style="text-align:center"><input type="radio" name="a5" value="4"/></td>
                <td style="text-align:center"><input type="radio" name="a5" value="3"/></td>
                <td style="text-align:center"><input type="radio" name="a5" value="2"/></td>
                <td style="text-align:center"><input type="radio" name="a5" value="1"/></td>
            </tr>
            <tr>
                <td class="questions">25. I am always prepared.</td>
                <td style="text-align:center"><input type="radio" name="c5" value="1" required/></td>
                <td style="text-align:center"><input type="radio" name="c5" value="2"/></td>
                <td style="text-align:center"><input type="radio" name="c5" value="3"/></td>
                <td style="text-align:center"><input type="radio" name="c5" value="4"/></td>
                <td style="text-align:center"><input type="radio" name="c5" value="5"/></td>
            </tr>
            </tbody>
        </table>
    </div>

<!--    <div class="col-xs-6 text-center">-->
<!--        <a onclick="goBack()" class="btn btn-info pull-right" role="button">Previous</a>-->
<!--    </div>-->

    <div class="text-center">
        <input type="submit" class="btn btn-info" role="button" value= "Next">
    </div>
</form>
<br>
<br>
<br>
<div class="container">
    <div class="col-xs-12">
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="5"
                 aria-valuemin="0" aria-valuemax="24" style="width:21%">
                21%
            </div>
        </div>
    </div>
    <div class="col-xs-12 text-center">
        <p>Page 5 of 24.</p>
    </div>
</div>

<script>
    function goBack() {
        window.history.back();
    }
</script>

</body>
</html>