<?php
/* for Project Euler problem 1 to help me learn PHP */

echo "\n";
$total = 0;

for ($i = 1; $i < 1000; $i++){
    if($i%3==0 || $i%5==0){
        $total = ($total + $i);
        echo "i:".$i."\n";
        echo "total:".$total."\n";
    }
}

echo "Project Euler Problem 1 result: ".$total;
echo "\n";