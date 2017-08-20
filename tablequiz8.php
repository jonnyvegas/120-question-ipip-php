
<?php
session_start();
foreach($_POST as $key => $item)
{
    if($key == "n1")
    {
        $_SESSION["neuroticism"] += $item;
        $_SESSION["anxiety"] += $item;
    }
    else if($key == "e1")
    {
        $_SESSION["extraversion"] += $item;
        $_SESSION["friendliness"] += $item;
    }
    else if($key == "o1")
    {
        $_SESSION["openness"] += $item;
        $_SESSION["imagination"] += $item;
    }
    else if($key == "a1")
    {
        $_SESSION["agreeableness"] += $item;
        $_SESSION["trust"] += $item;
    }
    else if($key == "c1")
    {
        $_SESSION["conscientiousness"] += $item;
        $_SESSION["self-efficacy"] += $item;
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
    <h1 class="text-center">This is page 8 of our quiz.<br> <small>Please answer all questions.</small></h1>
    <br>
    <p style="color:red;" class="text-center"><strong>Please do not click back or refresh during the quiz, or you may get inaccurate results.</strong></p>

</div>
<form action="tablequiz9.php" method="post">
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
                <td class="questions">36. I get irritated easily.</td>
                <td style="text-align:center"><input type="radio" name="n2" value="1" required/></td>
                <td style="text-align:center"><input type="radio" name="n2" value="2"/></td>
                <td style="text-align:center"><input type="radio" name="n2" value="3"/></td>
                <td style="text-align:center"><input type="radio" name="n2" value="4"/></td>
                <td style="text-align:center"><input type="radio" name="n2" value="5"/></td>
            </tr>
            <tr>
                <td class="questions">37. I talk to a lot of different people at parties.</td>
                <td style="text-align:center"><input type="radio" name="e2" value="1" required/></td>
                <td style="text-align:center"><input type="radio" name="e2" value="2"/></td>
                <td style="text-align:center"><input type="radio" name="e2" value="3"/></td>
                <td style="text-align:center"><input type="radio" name="e2" value="4"/></td>
                <td style="text-align:center"><input type="radio" name="e2" value="5"/></td>
            </tr>
            <tr>
                <td class="questions">38. I see beauty in things that others might not notice.</td>
                <td style="text-align:center"><input type="radio" name="o2" value="1" required/></td>
                <td style="text-align:center"><input type="radio" name="o2" value="2"/></td>
                <td style="text-align:center"><input type="radio" name="o2" value="3"/></td>
                <td style="text-align:center"><input type="radio" name="o2" value="4"/></td>
                <td style="text-align:center"><input type="radio" name="o2" value="5"/></td>
            </tr>
            <tr>
                <td class="questions">39. I cheat to get ahead.</td>
                <td style="text-align:center"><input type="radio" name="a2" value="5" required/></td>
                <td style="text-align:center"><input type="radio" name="a2" value="4"/></td>
                <td style="text-align:center"><input type="radio" name="a2" value="3"/></td>
                <td style="text-align:center"><input type="radio" name="a2" value="2"/></td>
                <td style="text-align:center"><input type="radio" name="a2" value="1"/></td>
            </tr>
            <tr>
                <td class="questions">40. I often forget to put things back in their proper place.</td>
                <td style="text-align:center"><input type="radio" name="c2" value="5" required/></td>
                <td style="text-align:center"><input type="radio" name="c2" value="4"/></td>
                <td style="text-align:center"><input type="radio" name="c2" value="3"/></td>
                <td style="text-align:center"><input type="radio" name="c2" value="2"/></td>
                <td style="text-align:center"><input type="radio" name="c2" value="1"/></td>
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
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="8"
                 aria-valuemin="0" aria-valuemax="24" style="width:33%">
                33%
            </div>
        </div>
    </div>
    <div class="col-xs-12 text-center">
        <p>Page 8 of 24.</p>
    </div>
</div>
<script>
    function goBack() {
        window.history.back();
    }
</script>
</body>
</html>