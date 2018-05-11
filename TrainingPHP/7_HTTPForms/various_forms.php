<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submit'])) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}
?>

<html>

<head>
    <title>VariousForms</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div>
    <form action="various_forms.php" method="post">
        <p>Enter Firstname and Lastname</p>
        <input type="text" name="firstname"><br>
        <input type="text" name="lastname"><br>

        <hr>


        <input type="reset" value="Reset">
        <input type="submit" value="Submit" name="submit">
    </form>
</div>
</body>
</html>