<?php
/* for Project Euler problem 1 to help me learn PHP */


//echo "\n";

class Problem1{

    private $total = 0;

    public function sum3sAnd5s($upperBound = 1000, $logging = false){
        $this->total = 0;
        for ($i = 1; $i < $upperBound; $i++){
            if($i%3==0 || $i%5==0){
                $this->total += + $i;
                if($logging){
                    echo "i: ".$i."\n";
                    echo "total: ".$this->total."\n";
                }
            }
        }
        if($logging){
            echo "Project Euler Problem 1 result: ".$this->total;
            echo "\n";
        }
        return $this->total;
    }
}
