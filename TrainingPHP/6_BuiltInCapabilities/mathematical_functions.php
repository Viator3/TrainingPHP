<html>

<head>
    <title>MathematicalFunctions</title>
    <meta charset = "utf-8" />
</head>

<body>
<?php
//Mathematical Functions
echo "Mathematical Functions\n";

$arr = [0, -8, 33, 12];
$f = 33.333777;
echo '$arr = [0, -8, 33, 12]' . "\n";
echo '$f = 33.333777' . "\n";

echo 'max($arr) - we search for the maximum value - ';
echo max($arr) . "\n";
echo 'min($arr) - we search for the minimum value - ';
echo min($arr) . "\n";

echo 'rand(0,9) - generates a random number in a given range - ';
echo rand(0,9) . "\n";

echo 'rand(0,9) - generates a random number in a given range - ';
echo rand(0,9) . "\n";

echo 'round($f,2) - it allows rounding to the nearest value with a given accuracy - ';
echo round($f,2) . "\n";

echo 'ceil($f) - allows you to round to a larger value - ';
echo ceil($f) . "\n";

echo 'floor($f) - allows rounding to a lower value - ';
echo floor($f) . "\n";
?>

</body>
</html>