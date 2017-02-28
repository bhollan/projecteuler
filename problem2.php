<?php
/**
 * Created by PhpStorm.
 * User: brianh
 * Date: 1/02/17
 * Time: 06:11 PM
 */

echo "\n";

$total = 2;
$prev = 1;
$curr = 2;
$i = 2;

while ($curr < 4000000){
    echo "i: ".$i."\n";
    echo "prev: ".$prev."\n";
    echo "curr: ".$curr."\n";
    echo "total: ".$total."\n";
    $i++;
    $temp = $curr;
    $curr = $prev + $temp;
    $prev = $temp;

    if($curr%2==0){
        $total += $curr;
    }
}

echo "Project Euler Problem 2 result: ".$total;
echo "\n";