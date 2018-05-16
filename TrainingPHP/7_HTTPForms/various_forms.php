<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submit'])) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    echo '<pre>';
    print_r($_FILES);
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
    <form action="various_forms.php" method="post" enctype="multipart/form-data">
        <p>Enter FirstName and LastName</p>
        <input type="text" name="firstname"><br>
        <input type="text" name="lastname"><br>

        <hr>
        <p>Enter Password</p>
        <input type="password" name="password"><br>

        <hr>
        <p>Select a method of forwarding:</p>
        <input type="checkbox" name="transport[]" value="onFoot">On foot<br>
        <input type="checkbox" name="transport[]" value="byCar">By car<br>
        <input type="checkbox" name="transport[]" value="metro">Metro<br>

        <hr>
        <p>Choose your gender:</p>
        <input type="radio" name="gender" value="male">Male<br>
        <input type="radio" name="gender" value="female">Female<br>

        <hr>
        <p>Select city:</p>
        <select name="city">
            <option value="london">London</option>
            <option value="paris">Paris</option>
            <option value="kyiv">Kyiv</option>
        </select>

        <hr>
        <p>Attach the file:</p>
        <input type="file" name="file">


        <hr>
        <input type="reset" value="reset">
        <input type="submit" value="submit" name="submit">
    </form>
</div>
</body>
</html>