<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$nickname = $_COOKIE['nickname'];

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
    </p>


</body>
</html>