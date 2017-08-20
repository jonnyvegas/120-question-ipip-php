<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="openingStyle.css">
    <link rel="shortcut icon" type="image/png" href="question-head-two-16-270712.png">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Welcome to the IPIP 120 Question Personality Quiz!</title>
</head>
<body>
<form>
    <div class="container" id="opening">
        <h1 class="text-center">Welcome to the IPIP 120 Question Personality Assessment Quiz!<br><br>
            <h4 class="text-center">The primary purpose of this on line inventory is to educate the public about the five factor model of personality.
                More specifically, the report explains the likely consequences of one's standing on five broad personality domains.
                These broad domains cover normal differences in personality that should be obvious to people who know you well.
                Secondarily, this inventory estimates your standing on the 5 broad domains and 30 subdomains of personality.
                The inventory does not reveal hidden, secret information about you nor does it assess serious psychological disorders.
                The report is designed to be objective, not pleasing or flattering.
                Measurement error, misunderstandings, carelessness, and mischievous responding can invalidate the report.
                If knowledgeable acquaintances disagree with the test results, then the results are wrong.</h4>
        </h1>
        <br>
    </div>

    <div class="col-xs-12 text-center" id="firstdiv">
        <p class="text-center" id="checkparagraph">Please check the following <span id="two">two</span> boxes before continuing:</p>
        <br>
        <form id="theform">
        <label><input type="checkbox" value="" id="firstbox" required > &nbsp;Yes, I understand that responding to all items
            on this inventory is time consuming and that technical difficulties may prevent the results from being displayed.
            I am responding to this inventory with the full knowledge of the risk that I might not receive results.
            I accept full responsibility and risk for the time I invest in responding to this inventory.</label>
            <br>
            <br>
            <br>
        <!--<p class="text-center" id="endorse"> Before you can access the test, you must endorse the statement below by clicking the checkbox.</p>-->
        <label><input type="checkbox" value="" id="secondbox" required >
            Yes, I understand that the primary purpose of this site is to educate the public about the five factor model
            of personality, and only secondarily, to estimate the respondent's standing within the five factor model. I
            understand that the program that generates the report is designed to produce estimates that are as accurate
            as possible, but that measurement error or improper responding can produce inaccurate results. If I think I
            have answered the items honestly and carefully but my results are inaccurate or not as pleasing as I would
            like them to be, I will have knowledgeable acquaintances evaluate the validity of the report before contacting
            Dr. Johnson. If I choose to critique the test or narrative report after receiving feedback from knowledgeable
            acquaintances, I will do so in a courteous and civil manner.</label>
            <br>
            <br>
            <br>


        <!--<p class="text-center">-->
            <!--If you do not agree to both of these terms, please leave <strong>NOW.</strong> <br>-->
            <!--Maybe you think this is nonsense and you don't wanna do it. Fine. <em>Get outta here!</em>-->
        <!--</p>-->
            <br>

            <p><button type="submit" formaction="tablequiz1.php" class="btn btn-success">Submit</button></p>
        </form>
    </div>

    <?php
    $_SESSION["extraversion"] = 0;
    $_SESSION["agreeableness"] = 0;
    $_SESSION["conscientiousness"] = 0;
    $_SESSION["neuroticism"] = 0;
    $_SESSION["openness"] = 0;
    $_SESSION["friendliness"] = 0;
    $_SESSION["gregariousness"] = 0;
    $_SESSION["assertiveness"] = 0;
    $_SESSION["activity-level"] = 0;
    $_SESSION["excitement-seeking"] = 0;
    $_SESSION["cheerfulness"] = 0;
    $_SESSION["trust"] = 0;
    $_SESSION["morality"] = 0;
    $_SESSION["altruism"] = 0;
    $_SESSION["cooperation"] = 0;
    $_SESSION["modesty"] = 0;
    $_SESSION["sympathy"] = 0;
    $_SESSION["self-efficacy"] = 0;
    $_SESSION["orderliness"] = 0;
    $_SESSION["dutifulness"] = 0;
    $_SESSION["achievement-striving"] = 0;
    $_SESSION["self-discipline"] = 0;
    $_SESSION["cautiousness"] = 0;
    $_SESSION["anxiety"] = 0;
    $_SESSION["anger"] = 0;
    $_SESSION["depression"] = 0;
    $_SESSION["self-consciousness"] = 0;
    $_SESSION["immoderation"] = 0;
    $_SESSION["vulnerability"] = 0;
    $_SESSION["imagination"] = 0;
    $_SESSION["artistic-interests"] = 0;
    $_SESSION["emotionality"] = 0;
    $_SESSION["adventurousness"] = 0;
    $_SESSION["intellect"] = 0;
    $_SESSION["liberalism"] = 0;
    ?>
    <p style="color:red;" class="text-center"><strong>Please do not click back or refresh during the quiz, or you may get inaccurate results.</strong></p>
</body>
</html>