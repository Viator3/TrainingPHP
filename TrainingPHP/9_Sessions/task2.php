<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

function transit() {
    header('Location: task3.php');
    exit;
}

$nickname = $_SESSION['nickname'];

if (isset($_POST['answer2']) && (!empty($_POST['answer2']))) {
    $answer2 = $_POST['answer2'];
    $_SESSION['$answer2'] = $answer2;
    transit();
}

?>

<html>

<head>
    <title>Task2</title>
    <meta charset="UTF-8">

</head>

<body>
<form method="post">
    <h1>Task2</h1>

    <p>Hello,
        <?php
        print_r($nickname);
        echo '<br/>';
        ?>
    </p>
    <p>4 + 3 = ?</p>
    <input type="text" name="answer2">
    <input type="submit" name="submit">
</form>
</body>
</html>