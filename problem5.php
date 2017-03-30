<?php
/**
 * Created by PhpStorm.
 * User: brianh
 * Date: 20/03/17
 * Time: 10:08 AM
 */


// prime factorization of 1 -> 10:
// 2,2,2,3,3,5,7

// prime factorization of 1 -> 20;


include('./Primes.php');

$p = new Primes();

function get_lcm($upper_bound){
    if($upper_bound <= 1){
        return 1;
    } elseif ($upper_bound == 2){
        return 2;
    }
    $targets = range(1, $upper_bound);
    $current_lcm = $targets[0]; //this will always be 1
    $next = $targets[1];        //this will always be 2
    for($i = 2; $i < count($targets); $i++){
//        echo(gmp_gcd($current_lcm, $next)."\n");
        $current_lcm = ($current_lcm*$next)/(gmp_gcd($current_lcm, $next));
        $next = $targets[$i];
    }
    echo("LCM of 1 - ".$upper_bound.": ".$current_lcm."\n");
    return $current_lcm;
}

//echo(get_lcm(1)."\n");
//echo(get_lcm(2)."\n");
//echo(get_lcm(3)."\n");
//echo(get_lcm(10)."\n");
//garbage comment here
get_lcm(20);