<html>

<head>
    <title>CustomFunctions</title>
    <meta charset = "utf-8" />
</head>

<body>
<?php

include_once 'recursiveFunction.php';

mysecondfunction('World');

function myFirstFunction() {
    echo "\nHello\n";
}

function mySecondFunction($name) {
    echo "\nHello, $name\n";
}

function myThirdFunction($name, $authorsName) {
    echo "\nHello, $name, this is $authorsName\n\n";
}

function myFourthFunction($array) {
    foreach ($array as $name) {
        echo "Hello, $name\n";
    }
}

function myFifthFunction($name = 'User') {
    echo "Hello, $name\n";
}

myFirstFunction();
myThirdFunction('World', 'Valera');

$arr = array('Bim', 'Dim', 'Gim');
myFourthFunction($arr);
echo "\n";

myFifthFunction();
myFifthFunction('Dim');

$a = 1;   //a = 1
function mySixthFunction($name = 'User') {
    $a = 2; //a = 2
}
mySixthFunction();
echo "\n$a\n";  //a = 1

//Global variables
echo "\nGlobal variable\n";
$name = 'Dim';
$name2 = 'Gim';
function mySeventhFunction() {
    $name = 'Bim';
    echo "Hello, $name\n";

    global $name;
    echo "Hello, $name\n";
    $name = 'Kim';

    echo 'Hello, ' . $GLOBALS['name2'] . "\n";
    $GLOBALS['name2'] = 'Tim';
}
mySeventhFunction();
echo "Hello, $name\n";
echo "Hello, $name2\n";

//Passing by reference
echo "\nPassing by reference\n";
function myEighthFunction($alfa, &$beta) {
    $alfa = 10; $beta = 10;
}
$alfa = 5; $beta = 5;
myEighthFunction($alfa, $beta);
echo '$alfa = ' . $alfa . ', $beta = ' . $beta . "\n";

//Static variable
echo "\nStatic variable\n";
function staticVariable() {
    $one = 0; static $two = 0;
    ++$one; ++$two;
    echo '$one = ' . $one . ', $two = ' . $two . "\n";
}
staticVariable();
staticVariable();
staticVariable();

//Return values
echo "\nReturn values\n";
function areaRectangle($a, $b) {
    $area = $a * $b;
    return $area;
}
$a = 10; $b = 20;
echo '$ = ' . $a . ', $b = ' . $b . "\n";
echo 'areaRectangle = ' . areaRectangle($a, $b) . "\n";

//Recursive Function
echo "\nRecursive Function\n";
$array = array (
    'Auto Technology' => array(
        'Velo' => array(
            'Bicycles' => array(
                '(product) Extreme' => 10,
                '(product) Author' => 4,
            ),
            'Scooters' => 12,
        ),
        'Auto' => array(
            'Opel' => array(
                '(product) Vivaro' => 5,
            ),
            '(product) Honda' => 10,
            '(product) Audi' => 11,
        ),
        '(product) Accessories' => 7,
    ),
    'Photographic equipment' => array(
        'Photocamera' => 6,
        'Camcorders' => 3,
    ),
    'Other' => 3,
);

//function recursiveFunction($array/*, $level = 0*/) {
//    static $sum;
//    static $count;
//    if (is_array($array)) {
//        //$level++;
//        foreach ($array as $element) {
//            recursiveFunction($element/*, $level*/);
//        }
//    } else {
//        $count++;
//        $sum += $array;
//    }
//    return array('count' => $count, 'sum' => $sum);
//}

$result = recursiveFunction($array);
var_dump($result);

?>
</body>
</html>