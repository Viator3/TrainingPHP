<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_COOKIE['nickname']) && isset($_COOKIE['result'])) {
    //Delete cookies
    //    setcookie('nickname', '');
    //    setcookie('nickname', 'nickname' ,time() - 7);

    $nickname = $_COOKIE['nickname'];
    $result = $_COOKIE['result'];
    $arr = unserialize($result);
} else {
    $nickname = 'Guest';
    $arr = array('name' => 'Guest', 'year' => 2002);
}
?>

<html>

<head>
    <title>Page</title>
    <meta charset="UTF-8">

</head>

<body>
<h1>Page: page.php</h1>
<a href="cookie.php">Page: cookie.php</a>
<p>Hello, <?php
    print_r($nickname);
    echo '<br/>';
    print_r($arr);
    ?></p>
</body>
</html>