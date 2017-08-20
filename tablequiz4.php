<?php
session_start();
foreach($_POST as $key => $item) {
    if($key == "n3")
    {
        $_SESSION["neuroticism"] += $item;
        $_SESSION["depression"] += $item;
    }
    else if($key == "e3")
    {
        $_SESSION["extraversion"] += $item;
        $_SESSION["assertiveness"] += $item;
    }
    else if($key == "o3")
    {
        $_SESSION["openness"] += $item;
        $_SESSION["emotionality"] += $item;
    }
    else if($key == "a3")
    {
        $_SESSION["agreeableness"] += $item;
        $_SESSION["altruism"] += $item;
    }
    else if($key == "c3")
    {
        $_SESSION["conscientiousness"] += $item;
        $_SESSION["dutifulness"] += $item;
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
    <h1 class="text-center">This is page 4 of our quiz.<br> <small>Please answer all questions.</small></h1>
    <br>
    <p style="color:red;" class="text-center"><strong>Please do not click back or refresh during the quiz, or you may get inaccurate results.</strong></p>

</div>
<form action="tablequiz5.php" method="post">
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
                <td class="questions">16. I find it difficult to approach others.</td>
                <td style="text-align:center"><input type="radio" name="n4" value="1" required/></td>
                <td style="text-align:center"><input type="radio" name="n4" value="2"/></td>
                <td style="text-align:center"><input type="radio" name="n4" value="3"/></td>
                <td style="text-align:center"><input type="radio" name="n4" value="4"/></td>
                <td style="text-align:center"><input type="radio" name="n4" value="5"/></td>
            </tr>
            <tr>
                <td class="questions">17. I am always busy.</td>
                <td style="text-align:center"><input type="radio" name="e4" value="1" required/></td>
                <td style="text-align:center"><input type="radio" name="e4" value="2"/></td>
                <td style="text-align:center"><input type="radio" name="e4" value="3"/></td>
                <td style="text-align:center"><input type="radio" name="e4" value="4"/></td>
                <td style="text-align:center"><input type="radio" name="e4" value="5"/></td>
            </tr>
            <tr>
                <td class="questions">18. I prefer variety to routine.</td>
                <td style="text-align:center"><input type="radio" name="o4" value="1" required/></td>
                <td style="text-align:center"><input type="radio" name="o4" value="2"/></td>
                <td style="text-align:center"><input type="radio" name="o4" value="3"/></td>
                <td style="text-align:center"><input type="radio" name="o4" value="4"/></td>
                <td style="text-align:center"><input type="radio" name="o4" value="5"/></td>
            </tr>
            <tr>
                <td class="questions">19. I love a good fight.</td>
                <td style="text-align:center"><input type="radio" name="a4" value="5" required/></td>
                <td style="text-align:center"><input type="radio" name="a4" value="4"/></td>
                <td style="text-align:center"><input type="radio" name="a4" value="3"/></td>
                <td style="text-align:center"><input type="radio" name="a4" value="2"/></td>
                <td style="text-align:center"><input type="radio" name="a4" value="1"/></td>
            </tr>
            <tr>
                <td class="questions">20. I work hard.</td>
                <td style="text-align:center"><input type="radio" name="c4" value="1" required/></td>
                <td style="text-align:center"><input type="radio" name="c4" value="2"/></td>
                <td style="text-align:center"><input type="radio" name="c4" value="3"/></td>
                <td style="text-align:center"><input type="radio" name="c4" value="4"/></td>
                <td style="text-align:center"><input type="radio" name="c4" value="5"/></td>
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
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="4"
                 aria-valuemin="0" aria-valuemax="24" style="width:17%">
                17%
            </div>
        </div>
    </div>
    <div class="col-xs-12 text-center">
        <p>Page 4 of 24.</p>
    </div>
</div>
<script>
    function goBack() {
        window.history.back();
    }
</script>
</body>
</html>