<?php

$arr = [1, 2, 3, 4, 5];

function sumArr(array $arr, int $index) {

    if ($index === count($arr)) {
        return 0;
    }

    $currentSum = $arr[$index] + sumArr($arr, $index + 1);

    return $currentSum;
}

$sum = sumArr($arr, 0);

//echo $sum;

function factorial(int $num) {
    if ($num === 0) {
        return 1;
    }

    return $num * factorial($num - 1);
}

//echo factorial(5);

echo PHP_EOL;

function reverseString(string $string) {
    if ($string === "") {
        return "";
    }

    return reverseString(substr($string,1)) . $string[0];
}
function reverseArray(array $array, $start, $end) {
    if ($start >= $end) {
        echo implode(" ", $array);
        return;
    }

    $temp = $array[$start];
    $array[$start] = $array[$end];
    $array[$end] = $temp;

    reverseArray($array, $start + 1, $end - 1);
}

reverseArray([1,2,3,4], 0, 3);
echo PHP_EOL;

//echo reverseString("wat");

function printSmh(int $num) {
    if ($num == 0) {
        return;
    }

    echo str_repeat("*", $num) . PHP_EOL;

    printSmh($num - 1);

    echo str_repeat("#", $num) . PHP_EOL;
}

//printSmh(5);

function generate(int $index, array $arr) {

    if($index === count($arr)) {
        echo implode(" ", $arr) . PHP_EOL;
    } else {
        for ($i = 0; $i <= 1; $i++) {
            $arr[$index] = $i;
            generate($index + 1, $arr);
        }
    }
}

//generate(0, [0, 0, 0]);

function generateSet(array $set, array $vector, int $index, int $border) {
    if ($index >= count($vector)) {
        echo implode(" ", $vector) . PHP_EOL;
    } else {
        for ($i = $border + 1; $i < count($set); $i++) {
            $vector[$index] = $set[$i];
            generateSet($set, $vector, $index + 1, $i);
        }
    }
}

generateSet([1, 2, 3, 4, 5, 6], [0, 0], 0, -1);