<?php
// functionsRel3.php
function swap(&$a, &$b) {
    $tmp = $a;
    $a = $b;
    $b = $tmp;
}

function reverse_array_with_swap(array &$arr): void {
    $i = 0;
    $j = count($arr) - 1;
    while ($i < $j) {
        swap($arr[$i], $arr[$j]);
        $i++; $j--;
    }
}
?>