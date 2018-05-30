<html>

<head>
    <title>WorkWithArrays</title>
    <meta charset = "utf-8" />
</head>

<body>
<?php
//Work With Arrays
echo "Work With Arrays\n";

$arr = ['first' => '4', 'second' => '0', 'third' => '3'];
echo "\n" . '$arr = [\'first\' => \'4\', \'second\' => \'0\', \'third\' => \'3\']';

echo "\n" . 'in_array(\'3\', $arr) - does the specified element exist in the array - ';
var_dump(in_array('3', $arr));

echo 'array_values($arr) - we get the values from the array - ';
var_dump(array_values($arr));

echo 'array_keys($arr) - get the keys from the array - ';
var_dump(array_keys($arr));

$students1 = array('123' => 'Bim', '456' => 'Dim', '789' => 'Gim');
$students2 = array('987' => 'Kim', '654' => 'Pim', '321' => 'Tim');
echo "\n" . '$students1 = array(\'123\' => \'Bim\', \'456\' => \'Dim\', \'789\' => \'Gim\')' . "\n";
echo '$students2 = array(\'987\' => \'Kim\', \'654\' => \'Pim\', \'321\' => \'Tim\')' . "\n";
echo '$commonGroup = $students1 + $students2 - ';
$commonGroup = $students1 + $students2;
var_dump($commonGroup);

$arr1 = [1, 56, 4, 8, -34, 128, 12];
$arr2 = [25, 4, 12, -6, 33, 1];
echo "\n" . '$arr1 = [1, 56, 4, 8, -34, 128, 12];' . "\n";
echo '$arr2 = [25, 4, 12, -6, 33, 1]' . "\n";
echo 'array_intersect($arr1, $arr2) - calculates the convergence of arrays - ' . "\n";
var_dump(array_intersect($arr1, $arr2));
echo 'array_diff($arr1, $arr2) - calculates the divergence of arrays - ' . "\n";
var_dump(array_diff($arr1, $arr2));

//Sorting Arrays
echo "\nSorting Arrays\n";
$arr = ['first' => '4', 'second' => '0', 'third' => '3'];
echo "\n" . '$arr = [\'first\' => \'4\', \'second\' => \'0\', \'third\' => \'3\']' . "\n";
echo 'sort($arr) - sorts an array by values - ' . "\n";
sort($arr);
var_dump($arr);
$arr = ['first' => '4', 'second' => '0', 'third' => '3'];
echo 'ksort($arr) - sorts an array by keys - ' . "\n";
ksort($arr);
var_dump($arr);

?>

</body>
</html>