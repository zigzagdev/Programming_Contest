<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums)
    {
        sort($nums);
        $counts = array_count_values($nums);
        print_r($counts);
        foreach ($counts as $count) {
            if ($count != 1) {
                return 'true';
                break;
            }
            echo 'false';
        }
    }
}

?>