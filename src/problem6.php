<?php
/**
 * Created by PhpStorm.
 * User: brianh
 * Date: 17/03/17
 * Time: 02:42 PM
 */

$sumThenSquare = 0;
$squareThenSum = 0;
//$limit = 10;
$limit = 100;

for($i=1; $i <= $limit; $i++){
    $sumThenSquare += $i;
    $squareThenSum += $i*$i;
}

$sumThenSquare *= $sumThenSquare;

echo("The difference is: ".($sumThenSquare - $squareThenSum)."\n");