<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

function transit() {
    header('Location: result.php');
    exit;
}

$nickname = $_SESSION['nickname'];

if (isset($_POST['answer3']) && (!empty($_POST['answer3']))) {
    $answer3 = $_POST['answer3'];
    $_SESSION['$answer3'] = $answer3;
    transit();
}

?>

<html>

<head>
    <title>Task3</title>
    <meta charset="UTF-8">

</head>

<body>
<form method="post">
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