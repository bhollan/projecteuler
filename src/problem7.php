<?php
/**
 * Created by PhpStorm.
 * User: brianh
 * Date: 17/03/17
 * Time: 02:35 PM
 */

include('./Primes.php');

$p = new Primes();

//$numberOfPrimes = 10;
$numberOfPrimes = 10000;
$prime = 2;
$primes = [];

while(count($primes) < $numberOfPrimes){
    array_push($primes, $p->next_prime($prime));
    $prime = $p->next_prime($prime);
}

echo("The ".$numberOfPrimes."th prime is: ".$prime."\n");