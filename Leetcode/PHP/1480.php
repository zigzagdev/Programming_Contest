<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums)
    {
        $evisjap = [$nums[0]];
        $taku = count($nums);
        for ($i = 1; $i < $taku; $i++) {
            array_push($evisjap, $evisjap[$i - 1] + $nums[$i]);
        }
        return $evisjap;
    }
}

?>