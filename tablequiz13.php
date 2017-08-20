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
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>The IPIP 120-Question Personality Quiz</title>
    <link rel="shortcut icon" type="image/png" href="question-head-two-16-270712.png">
</head>
<body>

<div class="container">
    <h1 class="text-center">This is page 13 of our quiz.<br> <small>Please answer all questions.</small></h1>
    <br>
    <p style="color:red;" class="text-center"><strong>Please do not click back or refresh during the quiz, or you may get inaccurate results.</strong></p>

</div>
<form action="tablequiz14.php" method="post">
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
                <td class="questions">61. I am afraid of many things.</td>
                <td style="text-align:center"><input type="radio" name="n1" value="1" required/></td>
                <td style="text-align:center"><input type="radio" name="n1" value="2"/></td>
                <td style="text-align:center"><input type="radio" name="n1" value="3"/></td>
                <td style="text-align:center"><input type="radio" name="n1" value="4"/></td>
                <td style="text-align:center"><input type="radio" name="n1" value="5"/></td>
            </tr>
            <tr>
                <td class="questions">62. I avoid contact with others.</td>
                <td style="text-align:center"><input type="radio" name="e1" value="5" required/></td>
                <td style="text-align:center"><input type="radio" name="e1" value="4"/></td>
                <td style="text-align:center"><input type="radio" name="e1" value="3"/></td>
                <td style="text-align:center"><input type="radio" name="e1" value="2"/></td>
                <td style="text-align:center"><input type="radio" name="e1" value="1"/></td>
            </tr>
            <tr>
                <td class="questions">63. I love to daydream.</td>
                <td style="text-align:center"><input type="radio" name="o1" value="1" required/></td>
                <td style="text-align:center"><input type="radio" name="o1" value="2"/></td>
                <td style="text-align:center"><input type="radio" name="o1" value="3"/></td>
                <td style="text-align:center"><input type="radio" name="o1" value="4"/></td>
                <td style="text-align:center"><input type="radio" name="o1" value="5"/></td>
            </tr>
            <tr>
                <td class="questions">64. I trust what people say.</td>
                <td style="text-align:center"><input type="radio" name="a1" value="1" required/></td>
                <td style="text-align:center"><input type="radio" name="a1" value="2"/></td>
                <td style="text-align:center"><input type="radio" name="a1" value="3"/></td>
                <td style="text-align:center"><input type="radio" name="a1" value="4"/></td>
                <td style="text-align:center"><input type="radio" name="a1" value="5"/></td>
            </tr>
            <tr>
                <td class="questions">65. I handle tasks smoothly.</td>
                <td style="text-align:center"><input type="radio" name="c1" value="1" required/></td>
                <td style="text-align:center"><input type="radio" name="c1" value="2"/></td>
                <td style="text-align:center"><input type="radio" name="c1" value="3"/></td>
                <td style="text-align:center"><input type="radio" name="c1" value="4"/></td>
                <td style="text-align:center"><input type="radio" name="c1" value="5"/></td>
            </tr>
            </tbody>
        </table>
    </div>

<!--    <div class="col-xs-6 text-center">-->
<!--        <a onclick="goBack()" type="button" class="btn btn-info pull-right" role="button">Previous</a>-->
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
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="13"
                 aria-valuemin="0" aria-valuemax="24" style="width:54%">
                54%
            </div>
        </div>
    </div>
    <div class="col-xs-12 text-center">
        <p>Page 13 of 24.</p>
    </div>
</div>
<script>
    function goBack() {
        window.history.back();
    }
</script>
</body>
</html>