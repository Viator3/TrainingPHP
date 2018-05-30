<?php
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
?>