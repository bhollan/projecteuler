<?php
/**
 * Created by PhpStorm.
 * User: brianh
 * Date: 10/02/17
 * Time: 08:16 AM
 */

include('./Primes.php');

$p = new Primes();

//echo("Starting Prime Factorization\n");
//$primeFactors = $p->get_prime_factors(512);
//$primeFactors = $p->get_prime_factors(13195);
//$primeFactors = $p->get_prime_factors(131953445);
//$primeFactors = $p->get_prime_factors(1319534454);
$primeFactors = $p->get_prime_factors(600851475143);


echo("Prime factors: ".implode($primeFactors, ', ')."\n");
echo("Largest Prime Factor: ".max($primeFactors)."\n");