<html>

<head>
    <title>ConditionalStatements</title>
    <meta charset = "utf-8" />
</head>

<body>
<?php
//Comparison operators
echo "Comparison operators<br/>";
$a = '5 people'; $b = 5;
echo '$a = ' . $a . ', $b = ' . $b . '<br/> ';
echo '$a == $b / ';
var_dump($a == $b);
echo '<br/>';

echo '$a === $b / ';
var_dump($a === $b);
echo '<br/>';

echo '$a != $b / ';
var_dump($a != $b);
echo '<br/>';

echo '$a <> $b / ';
var_dump($a <> $b);
echo '<br/>';

echo '$a !== $b / ';
var_dump($a !== $b);
echo '<br/>';

echo '$a > $b / ';
var_dump($a > $b);
echo '<br/>';

echo '$a < $b / ';
var_dump($a < $b);
echo '<br/>';

echo '$a >= $b / ';
var_dump($a >= $b);
echo '<br/>';

echo '$a <= $b / ';
var_dump($a <= $b);
echo '<br/>';

//Conditional statements if, elseif, else
echo "<br/>Conditional statements if, elseif, else<br/>";
$a = 3; $b = 5;
echo '$a = ' . $a . ', $b = ' . $b . '<br/> ';
if ($a < $b) {
    echo 'min = ' . $a . '<br/> ';
} elseif ($a == $b) {
    echo 'variables are equal' . '<br/> ';
} else {
    echo 'min = ' . $b . '<br/> ';
}

//FALSE
echo "<br/>FALSE<br/>";
$st = false;
echo '(boolean)$st = false / ';
var_dump($st);
echo '<br/>';

$st = 0;
echo '(integer)$st = ' . $st . ' / ';
var_dump((boolean)$st);
echo '<br/>';

$st = 0.0;
$fg = number_format($st, 1, '.', '');
echo '(float)$st = ' . $fg . ' / ';
var_dump((boolean)$st);
echo '<br/>';

$st = "";
echo '(string)$st = ""' . $st . ' / ';
var_dump((boolean)$st);
echo '<br/>';

$st = '0';
echo '(string)$st = ' . "'$st'" . ' / ';
var_dump((boolean)$st);
echo '<br/>';

$st = array();
echo '(array)$st = ';
echo var_dump($st) . ' / ';
var_dump((boolean)$st);
echo '<br/>';

$st = NULL;
echo '(NULL)$st = ';
var_dump($st) . ' / ';;
var_dump((boolean)$st);
echo '<br/>';

//switch - case
echo "<br/>switch - case<br/>";
$day = 4;
echo '$day = ' . $day . ' / ';
switch ($day) {
    case 1: echo 'Sunday'; break;
    case 2: echo 'Monday'; break;
    case 3: echo 'Tuesday'; break;
    case 4: echo 'Wednesday'; break;
    case 5: echo 'Thursday'; break;
    case 6: echo 'Friday'; break;
    case 7: echo 'Saturday'; break;
    default: echo 'There is no such day of the week';
}

//Ternary operator () ? :
echo "<br/><br/>Ternary operator () ? :<br/>";
$status = true;
echo '$status = true / ';
$result = ($status) ? 'included' : 'switched off';
echo $result;

//Boolean variables
echo "<br/><br/>Boolean variables<br/>";
$a = true; $b = true;
echo '$a = true, $b = true<br/>';
echo '$a and $b / ';
var_dump($a and $b);
echo ' / true if $a = true and $b = true<br/>';

$a = true; $b = true;
echo '$a && $b / ';
var_dump($a && $b);
echo ' / true if $a = true and $b = true<br/>';

$a = true; $b = true;
echo '$a or $b / ';
var_dump($a or $b);
echo ' / true if $a = true or $b = true<br/>';

$a = true; $b = true;
echo '$a || $b / ';
var_dump($a || $b);
echo ' / true if $a = true or $b = true<br/>';

$a = true; $b = true;
echo '$a xor $b / ';
var_dump($a xor $b);
echo ' / true if $a = true or $b = true, but not both<br/>';

$a = true;
echo '!$a / ';
var_dump(!$a);
echo ' / true if $a = false<br/>';

//Priority of operators
echo "<br/><br/>Priority of operators<br/>";
echo "{++ --} {!} {* / %} {+ - .} {== != === !== <>} {&&} {||} {?:} {= += -= *= **= /= .= %= &= |= ^= <<= >>= =>} {and} {xor} {or] {,}";

?>
</body>
</html>
