<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

function transit() {
    header('Location: task1.php');
    exit;
}

if (isset($_POST['nickname']) && (!empty($_POST['nickname']))) {
    $nickname = $_POST['nickname'];
    setcookie('nickname', $nickname);
    transit();
} elseif (isset($_COOKIE['nickname'])) {
    $nickname = $_COOKIE['nickname'];
    if (isset($_POST['submit'])) {
        transit();
    }
} else {
    $nickname = 'Guest';
}

?>

<html>

<head>
    <title>StartTest</title>
    <meta charset="UTF-8">

</head>

<body>
<h1>Start test</h1>

<br>
<p>Hello, <?php
    print_r($nickname);
    echo '<br/>';
    ?></p>

<form method="post">
    <hr>
    <p>Enter Name</p>
    <input type="text" name="nickname"/>

    <hr>

    <input type="submit" name="submit"/>
</form>
</body>
</html>