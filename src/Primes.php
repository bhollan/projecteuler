<?php
/**
 * Created by PhpStorm.
 * User: brianh
 * Date: 1/02/17
 * Time: 06:28 PM
 */

//namespace PrimeChecker;


class Primes
{
    public $firstPrimes = [];

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
        while($i*$i <= $candidate)
        {
            if($candidate%$i==0 OR $candidate%($i + 2)==0)
            {
                return false;
            }
            $i += 6;
        }
        return true;
    }

    public function next_prime($start)

    {
        if($start == 2){
            return 3;
        }
        else if($this->is_prime($start)){
            $candidate = $start + 2;
        } elseif ($start%2==0){
            $candidate = $start + 1;
        } else {
            $candidate = $start;
        }
        while (!$this->is_prime(($candidate)))
        {
//            echo("Candidate: ".$candidate."\n");
            $candidate += 2;
        }
        return $candidate;
    }

    public function get_prime_factors($target, $logging = false)
    {
        if($logging){
            echo("Starting Prime Factorization of ".$target."\n");
        }
        $primeFactors = [];
        $prime = 2;

        while(!$this->is_prime($target))
        {
            //if this prime is a factor of target...
            while($target%$prime == 0)
            {
                //...keep adding current to prime factors
                array_push($primeFactors, $prime);
                //divide out current from $target
                $target /= $prime;
                if($logging){
                    echo("Prime factor: ".$prime."\n");
                }
            }

//            echo("Target: ".$target."\n");
//            echo("Prime: ".$prime."\n");
            $prime = $this->next_prime($prime);

            if($target == 1){
                break;
            }
        }
        if($this->is_prime(($target))){
            array_push($primeFactors, $target);
        }

        return $primeFactors;
    }
}