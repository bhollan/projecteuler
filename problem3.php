<?php
/**
 * Created by PhpStorm.
 * User: brianh
 * Date: 10/02/17
 * Time: 08:16 AM
 */

include('./Primes.php');

$p = new Primes();

echo("There are ".count($p->firstPrimes)." primes\n");

echo("Starting Prime Factorization\n");
//$primeFactors = $p->getPrimeFactors(13195);
$primeFactors = $p->getPrimeFactors(131953445);
//$primeFactors = $p->getPrimeFactors(600851475143);

//echo(var_dump($primeFactors));
echo("Largest Prime Factor: ".max($primeFactors)."\n");
