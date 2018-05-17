<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$nickname = $_COOKIE['nickname'];

?>

<html>

<head>
    <title>Task3</title>
    <meta charset="UTF-8">

</head>

<body>
<form action="result.php" method="post">
    <h1>Task3</h1>

    <p>Hello,
        <?php
        print_r($nickname);
        echo '<br/>';
        ?>
    </p>
    <p>8 + 5 = ?</p>
    <input type="text" name="answer3">
    <input type="submit" name="submit">
</form>
</body>
</html>