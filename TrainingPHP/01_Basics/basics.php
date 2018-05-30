<html>

<head>
    <title>Basics</title>
    <meta charset = "utf-8" />
</head>

<body>
    <?php
        echo 'Hello' . '<br/>';
        echo 2 + 2 . '<br/>';
        // Comment
        # Comment
        /*
        * Comment Line1
        * Comment Line2
        */
        echo 'a' . '<br/>';
        print (123 . '<br/>');
        echo 'b <br/>';
        print (2 + 20 . '<br/>');
        echo 'c <br/>';
        echo 1 + 2 + 3 . '<br/>';
        echo 'd <br/>';

        $a;
        $street;
        $user;
        $User;
        $USER;
        $username;
        $userName;
        $_item;

        $a = 3;
        echo $a += 4;

        echo '<br/>' . $user = "Bred <br/>";
        unset($user);
        echo $user;
        print ($user);

        $a = 5;
        $b = $a;
        $a = 10;
        echo "$a, $b <br/>";

        $a = 5;
        $b = &$a;
        $a = 10;
        echo "$a, $b <br/>";

        define("PI", 3.141592);
        $radius = 10;
        $square = PI * $radius * $radius;
        echo $square . '<br/>';

        define('NAME', 'Viktor');
        echo NAME . '<br/>';

        const NAME2 = 'VIKTOR_2';
        echo NAME2 . '<br/>';

        unset($a);
        $a = 2;
        echo '$a = ' . $a . ', ';
        echo '$b = ' . $b = 4 . '<br/>';
        echo '-$a = ' . (-$a) . '<br/>';
        echo '$a + $b = ' . ($a + $b) . '<br/>';
        echo '$a - $b = ' . ($a - $b) . '<br/>';
        echo '$a * $b = ' . ($a * $b) . '<br/>';
        echo '$a / $b = ' . ($a / $b) . '<br/>';
        echo '$a % $b = ' . ($a % $b) . '<br/>';

        $hello = 'world';
        $str = 'hello';
        echo $str . '<br/>';
        echo $$str;

        echo '<br/>If $a = ' . $a = 5 . ', then:<br/>';
        echo '$a += 2 equally ' . $a += 2;
        echo '<br/>$a -= 2 equally ' . $a -= 2;
        echo '<br/>$a *= 2 equally ' . $a *= 2;
        echo '<br/>$a /= 2 equally ' . $a /= 2;
        echo '<br/>$a %= 2 equally ' . $a %= 2;
        echo '<br/>$a .= 2 equally ' . $a .= 2;
    ?>
</body>
</html>
