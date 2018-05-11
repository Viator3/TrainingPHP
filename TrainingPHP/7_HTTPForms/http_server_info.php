<html>

<head>
    <title>HttpServerInfo</title>
    <meta charset = "utf-8" />
</head>

<body>
<?php
//HTTP Server Info
echo "HTTP Server Info\n";
var_dump($_SERVER);

var_dump($_SERVER['REQUEST_TIME']);

phpinfo();
?>

</body>
</html>