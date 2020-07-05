<?php
function binarySearch($numbers, $needle) {
    $slow = 0;
    $high = count($numbers) -1;
    while ($slow <= $high) {
        $mid = (($slow + $high) / 2);

        if ($numbers[$mid] > $needle) {
            $high = $mid -1;
        } else if ($numbers[$mid] < $needle) {
            $slow = $mid +1;
        } else {
            return TRUE;
        }
    }
    return FALSE;
}

$numbers = range(1,200,5);

$number = 31;
if (binarySearch($numbers,$number) !== FALSE) {
    echo $number ."found";
} else {
    echo $number ."not found";
}

$number = 36;
if (binarySearch($numbers,$number) !== FALSE) {
    echo $number ."found";
} else {
    echo $number ."not found";
}