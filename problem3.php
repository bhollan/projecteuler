<?php
/**
 * Created by PhpStorm.
 * User: brianh
 * Date: 10/02/17
 * Time: 08:16 AM
 */

include('../Primes.php');

$p = new Primes();

$p->is_prime(44);

echo('done');
//echo('<br/>');
//echo("There are ".count($p->firstPrimes)." primes");
//$p->generatePrimes();
//echo("<br/>");
//echo("NOW there are ".count($p->firstPrimes)." primes");

$primeFactors = $p->getPrimeFactors(13195);
//$primeFactors = $p->getPrimeFactors(600851475143);

echo(var_dump("bullshit"));