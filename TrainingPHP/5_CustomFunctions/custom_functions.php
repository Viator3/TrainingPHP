<html>

<head>
    <title>CustomFunctions</title>
    <meta charset = "utf-8" />
</head>

<body>
<?php

mysecondfunction('World');

function myFirstFunction() {
    echo "<h1>Hello</h1>";
}

function mySecondFunction($name) {
    echo "<h1>Hello, $name</h1>";
}

function myThirdFunction($name, $authorsName) {
    echo "<h1>Hello, $name, this is $authorsName</h1>";
}

function myFourthFunction($array) {
    foreach ($array as $name) {
        echo "Hello, $name<br/>";
    }
}

function myFifthFunction($name = 'User') {
    echo "Hello, $name<br/>";
}

myFirstFunction();
myThirdFunction('World', 'Valera');

$arr = array('Bim', 'Dim', 'Gim');
myFourthFunction($arr);
echo '<br/>';

myFifthFunction();
myFifthFunction('Dim');

$a = 1;   //a = 1
function mySixthFunction($name = 'User') {
    $a = 2; //a = 2
}
mySixthFunction();
echo "<br/>$a<br/>";  //a = 1

//Global variables
echo "<br/>Global variable<br/>";
$name = 'Dim';
$name2 = 'Gim';
function mySeventhFunction() {
    $name = 'Bim';
    echo "Hello, $name<br/>";

    global $name;
    echo "Hello, $name<br/>";
    $name = 'Kim';

    echo 'Hello, ' . $GLOBALS['name2'] . '<br/>';
    $GLOBALS['name2'] = 'Tim';
}
mySeventhFunction();
echo "Hello, $name<br/>";
echo "Hello, $name2<br/>";

//Passing by reference
echo "<br/>Passing by reference<br/>";
function myEighthFunction($alfa, &$beta) {
    $alfa = 10; $beta = 10;
}
$alfa = 5; $beta = 5;
myEighthFunction($alfa, $beta);
echo '$alfa = ' . $alfa . ', $beta = ' . $beta . '<br/>';

//Static variable
echo "<br/>Static variable<br/>";
function staticVariable() {
    $one = 0; static $two = 0;
    ++$one; ++$two;
    echo '$one = ' . $one . ', $two = ' . $two . '<br/>';
}
staticVariable();
staticVariable();
staticVariable();

//Return values
echo "<br/>Return values<br/>";
function areaRectangle($a, $b) {
    $area = $a * $b;
    return $area;
}
$a = 10; $b = 20;
echo '$ = ' . $a . ', $b = ' . $b . '<br/>';
echo 'areaRectangle = ' . areaRectangle($a, $b) . '<br/>';

//Recursive Function
echo "<br/>Recursive Function<br/>";
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

function recursiveFunction($array/*, $level = 0*/) {
    static $sum;
    static $count;
    if (is_array($array)) {
        //$level++;
        foreach ($array as $element) {
            recursiveFunction($element/*, $level*/);
        }
    } else {
        $count++;
        $sum += $array;
    }
    return array('count' => $count, 'sum' => $sum);
}

$result = recursiveFunction($array);
var_dump($result);

?>
</body>
</html>