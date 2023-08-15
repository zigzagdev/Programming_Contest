<?php

class Solution
{
    function twoSum($nums, $target)
    {
        for ($i = 0; $i < count($nums); $i++) {
            for ($k = $i + 1; $k < count($nums); $k++) {
                if ($nums[$i] + $nums[$k] == $target) {
                    return [$i, $k];
                }
            }
        }
    }
}

?>