<html>

<head>
    <title>DataTypes</title>
    <meta charset = "utf-8" />
</head>

<body>
    <?php
        //Boolean
        echo "Boolean<br/>";
        echo 'true = "' . true . '"<br/>';
        echo 'false = "' . false . '"<br/>';
        echo '<br/>';

        //Integer
        echo "Integer<br/>";
        echo '$int = ' . $int = 10 . '<br/>';
        echo '$int = ' . $int = -100 . '<br/>';
        echo '<br/>';

        //Float
        echo "Float<br/>";
        echo '$f = ' . $f = 0.5 . '<br/>';
        echo '$f = ' . $f = -0.525 . '<br/>';
        echo '<br/>';

        //String
        echo "String<br/>";
        $a = 10;
        echo 'This is an example $a = 10' . '<br/>';
        echo "This is an example $a = 10" . '<br/>';
        echo "User: \"This is an example $a = 10\"" . '<br/>';
        echo 'User: \'This is an example $a = 10\'' . '<br/>';
        echo 'User: "This is an example $a = 10"' . '<br/>';

        //In the 80s and 90s years
        $a = 80;
        $b = 90;
        echo "In the {$a}s and {$b}s years<br/>";

        //Dmitry Shev
        $firstName = 'Dmitry';
        $lastName = 'Shev';
        $fullName = $firstName . ' ' . $lastName;
        echo $fullName;
        echo '<br/>';

        $fullName = 'Dmitry';
        $fullName .= ' Shev<br/>';
        echo $fullName;
        echo '<br/>';

        //null
        echo 'null<br/>';
        $typeNull = null;
        echo gettype($typeNull) . '<br/>';
        unset($typeNull);
        echo gettype($typeNull) . '<br/>';
        echo '<br/>';

        //Type conversion
        echo "Type conversion<br/>";
        echo '$a = ' . $a = '5 people' . '<br/> ';
        echo '$a = (integer)$a = ' . $a = (integer)$a . '<br/>';

        echo '$a = ' . $a = '5 people' . ', $b = ' . $b = 10 . '<br/>';
        echo '$c = $a + $b = ' . $c = $a + $b . '<br/>';
        echo '<br/>';

        //Array
        echo 'Array<br/>';

        $arr = array('Bim', 'Dim', 'Gim');
        print ($arr[1]) . '<br/>';

        $arr = array('4' => 'Bim', '2' => 'Dim', '0' => 'Gim');
        print ($arr[2]) . '<br/>';

        $arr = array('name' => 'Bim', 'age' => '18', 'gender' => 'M');
        print ($arr['age']) . '<br/>';

        $students = array(
                array('name' => 'Bim', 'age' => '18', 'gender' => 'M'),
                array('name' => 'Dim', 'age' => '22', 'gender' => 'M'),
                array('name' => 'Gim', 'age' => '19', 'gender' => 'F'),
        );
        print ($students);
        echo $students;
        echo '<br/>';
        print_r($students);
        echo '<br/>';
        echo '<pre>';
            print_r($students);
        echo '</pre>';

        $students[] =  array('name' => 'Mom', 'age' => '33', 'gender' => 'F');
        var_dump($students);

        unset($students[1]['name']);
        echo '<pre>';
        print_r($students);
        echo '</pre>';

        var_dump($students[3]['gender']);

        echo '<br/>' . count($students) . '<br/>';
        echo count($students[2]) . '<br/>';
        echo count($students[3]['age']) . '<br/>';
    ?>
</body>
</html>

