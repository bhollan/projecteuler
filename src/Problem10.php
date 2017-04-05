<?php

/**
 * Created by PhpStorm.
 * User: brianh
 * Date: 4/04/17
 * Time: 08:18 PM
 */

class Problem10 extends Primes
{

    public function sum_primes_limit($upperBound){

        //FOR loop version is faster somehow?
        $output = 0;
        for($i=2; $i<$upperBound; $i++){
            if($this->is_prime($i)){
                $output += $i;
            }
        }
        return $output;

        //WHILE version works, but is somehow slower
//        $output = 0;
//        $i = 2;
//        while($i < $upperBound){
//            $output += $i;
//            $i = $this->next_prime($i);
//        }
//        return $output;
    }
}