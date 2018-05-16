<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['nickname']) && (!empty($_POST['nickname'])) && (!empty($_POST['name']))) {
    $nickname = $_POST['nickname'];
    $arr = array('name' => $_POST['name'], 'year' => $_POST['year']);
    $result = serialize($arr);

    setcookie('nickname', $nickname, time() + 600);
    setcookie('result', $result);
} elseif (isset($_COOKIE['nickname']) && isset($_COOKIE['result'])) {
    $nickname = $_COOKIE['nickname'];
    $result = $_COOKIE['result'];
} else {
    $nickname = 'Guest';
    $result = array('name' => 'Guest', 'year' => 2002);
}

?>

<html>

<head>
    <title>Cookie</title>
    <meta charset="UTF-8">

</head>

<body>
    <h1>Page: cookie.php</h1>
    <a href="page.php">Page: page.php</a>
    <br>
    <p>Hello, <?php
        print_r($nickname);
        echo '<br/>';
        print_r($result);
    ?></p>

    <form method="post">
        <hr>
        <p>Enter Nickname</p>
        <input type="text" name="nickname"/>

        <hr>
        <p>Enter Name and year of birth</p>
        <input type="text" name="name"/><br>
        <input type="number" name="year" min="1900" max="2099" step="1" value="2002"/>
        <hr>

        <input type="submit"/>
    </form>
</body>
</html>