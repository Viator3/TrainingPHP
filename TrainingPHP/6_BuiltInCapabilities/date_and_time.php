<html>

<head>
    <title>DateAndTime</title>
    <meta charset = "utf-8" />
</head>

<body>
<?php
//Date And Time
echo "Date And Time\n";
echo '$now = getdate() - returns information about the date and time for the current moment - ' . "\n";
$now = getdate();
var_dump($now);

echo '$timeStamp = time() - number of seconds since January 1, 1970 - ' . "\n";
$timeStamp = time();
var_dump($timeStamp);

$hour = 12; $minute = 22; $second = 38; $month = 2; $day = 15; $year = 2017;
echo "\n" . '$hour = 12; $minute = 22; $second = 38; $month = 2; $day = 15; $year = 2017;' . "\n";
echo '$timeStampDate = mktime($hour, $minute, $second, $month, $day, $year) - time stamp for a specific date - ' . "\n";
$timeStampDate = mktime($hour, $minute, $second, $month, $day, $year);
var_dump($timeStampDate);

echo "\n" . 'date("Y-M-d H-i-s") - formats the output of the date and time - ';
var_dump(date("Y-M-d H-i-s"));
echo 'date("F j, Y")- formats the output of the date and time - ';
var_dump(date("F j, Y"));
?>

</body>
</html>