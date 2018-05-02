<html>

<head>
    <title>Cycles</title>
    <meta charset = "utf-8" />
</head>

<body>
<?php
//while
echo "while<br/>";
$index = 3;
while ($index < 3) {
    echo 'will not be fulfilled';
    echo '$index = ' . $index++ . '<br/>';
}
echo 'end<br/>';

//do-while
echo "<br/>do-while<br/>";
$index = 3;
do {
    echo 'will be executed once<br/>';
    echo '$index = ' . $index++ . '<br/>';
} while ($index < 3);
echo 'end<br/>';

//for
echo "<br/>for<br/>";
for ($index = 0; $index < 3; $index++) {
    echo '$index = ' . $index . '<br/>';
}
echo 'end<br/><br/>';

$students = array(
                array('name' => 'Bim', 'age' => '18', 'gender' => 'M'),
                array('name' => 'Dim', 'age' => '22', 'gender' => 'M'),
                array('name' => 'Gim', 'age' => '19', 'gender' => 'F'),
        );
for ($index = 0; $index < count($students); $index++){
    echo 'name = ' . $students[$index]['name'] . ', age = ' . $students[$index]['age'] . '<br/>';
}
echo 'end<br/>';

//foreach
echo "<br/>foreach<br/>";
$arr = array('Bim', 'Dim', 'Gim');
$index = 0;
foreach ($arr as $item) {
    echo '$arr['. $index++ . '] = ' . $item . '<br/>';
}
echo 'end<br/><br/>';

$arr = array('4' => 'Bim', '2' => 'Dim', '0' => 'Gim');
foreach ($arr as $key => $item) {
    echo '$arr['. $key . '] = ' . $item . '<br/>';
}
echo 'end<br/>';

//continue, break
echo "<br/>continue, break<br/>";
echo 'continue - interrupts iteration<br/>';
echo 'break - interrupts the whole cycle<br/>';
?>
</body>
</html>