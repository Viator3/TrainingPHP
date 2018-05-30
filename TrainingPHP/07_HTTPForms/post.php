<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once 'functions.php';

if (isset($_POST['submit'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    if (!empty($a) && !empty($b) && !empty($c)) {
        $result = quadratic($a, $b, $c);
        if ($result != false) {
            var_dump($result);
            echo "<br/>";
        } else {
            echo "No roots<br/>";
        }
    }
    echo "Shared form a = $a, b = $b, c = $c;<br/>";
}
?>

<html>

<head>
    <title>POST</title>
    <meta charset="utf-8"/>
</head>

<body>
<div>
    <form action="post.php" method="post">
        A: <input type="text" name="a"><br/>
        B: <input type="text" name="b"><br/>
        C: <input type="text" name="c"><br/>
        <input type="submit" value="Submit" name="submit">
    </form>
</div>
</body>
</html>