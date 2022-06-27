<?php
function insertItem($array, $index, $value)
{
    $currentArray = $array;
    $arrayCount = count($array);
    $i = $arrayCount;
    for ($i; $i >= $index; $i--) {
        if ($i == $index) {
            $currentArray[$i] = $value;
        } else {
            $currentArray[$i] = $array[$i - 1];
        }
    }
    return $currentArray;
}
var_dump(insertItem([1, 2, 4, 5], 2, 3));
