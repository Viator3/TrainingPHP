<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$nickname = $_COOKIE['nickname'];

?>

<html>

<head>
    <title>Task2</title>
    <meta charset="UTF-8">

</head>

<body>
<form action="task3.php" method="post">
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