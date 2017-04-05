<?php

/**
 * Created by PhpStorm.
 * User: brianh
 * Date: 4/04/17
 * Time: 06:09 PM
 */
class Problem9
{

    public function triplet($target, $logging=false){

//        echo("stuff\n");


        for ($i=1; $i <= $target; $i++){
            for ($j=$i+1; $j <= $target-1; $j++){

                $k = $target - $i - $j;
                if(($k**2 == $i**2 + $j**2)){
                    if($logging){
                        echo("i:".$i."  j:".$j."  k:".$k."\n");
                        echo("i*j*k:".($i*$j*$k)."\n");
                    }
                    return $i*$j*$k;
                }
            }
        }

        return false;
    }

}