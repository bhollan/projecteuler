<?php
/**
 * Created by PhpStorm.
 * User: brianh
 * Date: 20/03/17
 * Time: 09:46 AM
 */

function is_palindrome($candidate){
    $backwards = $candidate;
    settype($backwards, "string");
    $backwards = strrev($backwards);
    if($candidate == $backwards){
        return true;
    } else {
        return false;
    }
}

function find_largest_palindrome_product($start_i, $start_j){
    for ($i = $start_i; $i >=  ($start_i*0.9); $i--){
        for ($j = $start_j; $j >= ($start_j*0.9); $j--){
            if(is_palindrome($i*$j)){
//                echo("i:".$i.",  "."j:".$j."i*j:".($i*$j).":\n");
//                echo(var_dump(is_palindrome($i*$j)));
                return $i*$j;
            }
        }
    }
}


echo(find_largest_palindrome_product(99,99)."\n");
echo(find_largest_palindrome_product(999,999)."\n");