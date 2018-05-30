<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

function transit() {
    header('Location: task2.php');
    exit;
}

$nickname = $_SESSION['nickname'];

if (isset($_POST['answer1']) && (!empty($_POST['answer1']))) {
    $answer1 = $_POST['answer1'];
    $_SESSION['$answer1'] = $answer1;
    transit();
}

?>

<html>

<head>
    <title>Task1</title>
    <meta charset="UTF-8">

</head>

<body>
<form method="post">
    <h1>Task1</h1>

    <p>Hello,
        <?php
        print_r($nickname);
        echo '<br/>';
        ?>
    </p>
    <p>2 + 2 = ?</p>
    <input type="text" name="answer1">
    <input type="submit" name="submit">
</form>
</body>
</html>