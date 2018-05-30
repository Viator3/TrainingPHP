<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

$nickname = $_SESSION['nickname'];
$correctAnswer = 0;

if ($_SESSION['$answer1'] == 4) {$correctAnswer++;}
if ($_SESSION['$answer2'] == 7) {$correctAnswer++;}
if ($_SESSION['$answer3'] == 13) {$correctAnswer++;}

?>

<html>

<head>
    <title>Result</title>
    <meta charset="UTF-8">

</head>

<body>
    <h1>Result</h1>

    <p>Hello,
        <?php
            print_r($nickname);
        echo '<br/>';
        ?>
        You have
        <?php
            print_r($correctAnswer);
        ?>
        correct answers!
    </p>


</body>
</html>