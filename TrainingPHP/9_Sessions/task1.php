<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$nickname = $_COOKIE['nickname'];

?>

<html>

<head>
    <title>Task1</title>
    <meta charset="UTF-8">

</head>

<body>
<form action="task2.php" method="post">
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