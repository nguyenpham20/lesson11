<?php
function search( $numbers,  $needle) {
    $totalItems = count($numbers);

    for ($i = 0; $i<$totalItems;$i++) {
        if ($numbers[$i] == $needle) {
            return TRUE;
        }
    }
    return FALSE;
}
$numbers = range(1,200,5);

if (search($numbers,31)) {
    echo "found";
} else {
    echo "not found";
}