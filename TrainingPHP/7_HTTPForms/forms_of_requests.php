<?php
if (isset($_GET['submit'])) {
    var_dump($_GET);
    $a = $_GET['a'];
    echo "<br/>Shared form<br/>";
    echo $a;
}
?>
<html>

<head>
    <title>FormsOfRequests</title>
    <meta charset="utf-8"/>
</head>

<body>
<div>
    <form action="forms_of_requests.php" method="get">
        A: <input type="text" name="a"><br/>
        B: <input type="text" name="b"><br/>
        C: <input type="text" name="c"><br/>
        <input type="submit" value="Submit" name="submit">
    </form>
</div>
</body>
</html>