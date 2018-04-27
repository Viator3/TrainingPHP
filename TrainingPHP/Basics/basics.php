<html>

<head>
    <title>PHP Basics</title>
    <meta charset = "utf-8" />
</head>

<body>
    <?php
        echo 'Hello';
        echo 2 + 2;
        // Comment
        # Comment
        /*
        * Comment Line1
        * Comment Line2
        */
        echo 'a';
        print (123);
        echo 'b';
        print (2 + 20);
        echo 'c';
        echo 1 + 2 + 3;
        echo 'd';

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

        echo $user = "Bred";
        unset($user);
        echo $user;
        print ($user);

        $a = 5;
        $b = $a;
        $a = 10;
        echo $a, $b;

        $a = 5;
        $b = &$a;
        $a = 10;
        echo $a, $b;

        define("PI", 3.141592);
        $radius = 10;
        $square = PI * $radius * $radius;
        echo $square;

        define('NAME', 'Viktor');
        echo NAME;

        const NAME2 = 'VIKTOR_2';
        echo NAME2;

        $a = 2;
        echo $a;
        echo $b = 4;

        echo $a, $b, $a + $b;
        echo $a - $b;
        echo $a * $b;
        echo $a / $b;
        echo $a % $b;
    ?>
</body>
</html>
