<html>

<head>
    <title>BuiltInCapabilities</title>
    <meta charset = "utf-8" />
</head>

<body>
<?php
    //Array Reverse
    echo "Array Reverse\n";
    $arr = [1, 2, 3, 4, 5, 6, 7];
    $arrReverse = array_reverse($arr);
    print_r($arrReverse);

    //Functions for working with variables
    echo "\nFunctions for working with variables\n";
    $arr = [1, 2, 3, 4, 5, 6, 7];
    $emptyString = '';

    echo '$arr = [1, 2, 3, 4, 5, 6, 7]' . "\n";
    echo '$emptyString = \'\'' . "\n";
    echo 'isset($emptyString) - checks if the value is set: ';
    var_dump(isset($emptyString));

    echo 'empty($emptyString) - checks if the variable is considered empty: ';
    var_dump(empty($emptyString));

    echo 'gettype($emptyString) - returns the type of the variable: ';
    echo gettype($emptyString). "\n";

    echo 'is_array($emptyString) - checks for belonging to a particular type: ';
    var_dump(is_array($emptyString));

    echo 'is_array($arr) - checks for belonging to a particular type: ';
    var_dump(is_array($arr));

    echo 'get_defined_vars() - gets all the defined variables in the given place of the program: ' . "\n";
    print_r(get_defined_vars());



?>
?>
</body>
</html>