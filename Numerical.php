<?php
/**
 * Created by PhpStorm.
 * User: brianh
 * Date: 1/02/17
 * Time: 06:28 PM
 */

//namespace PrimeChecker;


class Numerical
{
    public $firstPrimes = [];

    public function __construct()
    {
        $this->generatePrimes();
    }

    public function is_prime($candidate)
    {
        if ($candidate <= 1)
        {
            return false;
        }
        elseif ($candidate <= 3)
        {
            return true;
        }
        elseif ($candidate%2==0 OR $candidate%3==0)
        {
            return false;
        }
        $i = 5;
        while($i*$i < $candidate)
        {
            if($candidate%$i==0 OR $candidate%($i + 2)==0)
            {
                return false;
            }
            $i += 6;
        }
        return true;
    }

    public function generatePrimes()
    {
//        $this->firstPrimes = [2,3,5,7,11,13,17,19,23,29];
        $checkThisManyMoreNumbersForPrimes = 1000;
        $i = count($this->firstPrimes);
        $stopCountOfNumbers = $i + $checkThisManyMoreNumbersForPrimes;
        for (; $i<=$stopCountOfNumbers; $i++)
        {
            if($this->is_prime($i))
            {
                array_push($this->firstPrimes, $i);
            }
        }
    }

    public function fillFirstPrimesToTarget($target)
    {
        while(end($this->firstPrimes) < sqrt($target))
        {
            $this->generatePrimes();
        }
        return $this->firstPrimes;
    }

    public function getPrimeFactors($target)
    {
        $primeFactors = [];
        $primes = $this->fillFirstPrimesToTarget($target);

        while(!$this->is_prime($target))
        {
            //if this prime is a factor of target...
            if($target%current($primes) == 0)
            {
                //add current to prime factors
                array_push($primeFactors, current($primes));
                //divide out current from $target
                $target /= current($primes);
                //reset $primes
                reset($primes);

            } else  //if this prime is NOT a factor of target...
            {
                //next $prime
                next($primes);
            }
        }

        if($this->is_prime($target))
        {
            array_push($primeFactors, $target);
        }

        return $primeFactors;
    }
}