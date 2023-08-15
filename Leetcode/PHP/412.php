<?php

class Solution
{

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n)
    {
        $evisjap = [];
        for ($i = 1; $i < $n + 1; $i++) {
            if ($i % 15 == 0) {
                array_push($evisjap, "FizzBuzz");
            } elseif ($i % 3 == 0) {
                array_push($evisjap, "Fizz");
            } elseif ($i % 5 == 0) {
                array_push($evisjap, "Buzz");
            } else {
                array_push($evisjap, "$i");
            }
        }
        return $evisjap;
    }
}