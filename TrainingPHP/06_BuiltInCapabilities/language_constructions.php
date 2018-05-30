<html>

<head>
    <title>LanguageConstructions</title>
    <meta charset = "utf-8" />
</head>

<body>
<?php
//Language Constructions
echo "Language Constructions\n";

echo "\n" . 'echo "1"; die; echo "2";' . "\n";
echo 'die - allows you to stop the program execution - 1' . "\n";

echo "\n" . 'echo "1"; exit(\'2\'); echo "3";' . "\n";
echo 'exit(\'2\') - allows you to stop the program execution - 12' . "\n";

$a = 5; $b = 10; $string = '$c = $a + $b;';
echo "\n" . '$a = 5; $b = 10; $string = \'$c = $a + $b;\';' . "\n";
echo 'eval($string); echo $c; - allows you to execute a string as a Php code - ';
eval($string);
echo $c . "\n";

$arr = ['Value 1', 'Value 2'];
echo "\n" . '$arr = [\'Value 1\', \'Value 2\'];' . "\n";
echo 'list($val1, $val2) = $arr; - allows you to convert array elements to variables - ';
list($val1, $val2) = $arr;
echo '$val1 = ' . $val1 . ', $val2 = ' . $val2 . "\n";

?>
</body>
</html>