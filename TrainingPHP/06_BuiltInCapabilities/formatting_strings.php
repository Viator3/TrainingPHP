<html>

<head>
    <title>FormattingStrings</title>
    <meta charset = "utf-8" />
</head>

<body>
<?php
//Formatting Strings
echo "Formatting Strings\n";
$city = "London";
$percent = 22 / 41 * 100;
$total = 1000;
$format = '%1$s, this is %1$s. According to statistics, %2$.2f of %3$d respondents are in %1$s.';

printf($format, $city, $percent, $total);
echo "\n";
$resultString = sprintf($format, $city, $percent, $total);
echo $resultString . "\n";

echo 'strlen($reultString) - string length - ';
var_dump(strlen($resultString));

echo 'substr($resultString, 0, 20) - get the part of the string - ';
echo substr($resultString, 0, 20) . "\n";
echo 'substr($resultString, 18, 38) - get the part of the string - ';
echo substr($resultString, 18, 38) . "\n";

echo 'str_replace(\'o\', \'_\', $resultString) - replace part of the string - ';
echo str_replace('o', '_', $resultString) . "\n";
echo 'str_replace(\'London\', \'_\', $resultString) - replace part of the string - ';
echo str_replace('London', '_', $resultString) . "\n";
echo 'str_replace(\'London\', \'Paris\', $resultString) - replace part of the string - ';
echo str_replace('London', 'Paris', $resultString) . "\n";
echo 'str_replace(array(\'o\', \'s\'), \'_\', $resultString) - replace part of the string - ';
echo str_replace(array('o', 's'), '_', $resultString) . "\n";
echo 'str_replace(array(\'o\', \'s\'), array(\'_\', \'=\'), $resultString) - replace part of the string - ';
echo str_replace(array('o', 's'), array('_', '='), $resultString) . "\n";

echo '$linesResulting = explode(\',\', $resultString) - split the string into parts - ';
$linesResulting = explode(',', $resultString);
var_dump($linesResulting);

echo '$resultString = implode(\',\', $linesResulting) - glues together fragments into a string - ';
$resultString = implode(',', $linesResulting);
echo $resultString;
?>

</body>
</html>