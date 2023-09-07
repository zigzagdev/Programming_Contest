<?php

class Solution
{
    function isPalindrome($x)
    {
        if (strrev($x) === $x) {
            return 'true';
        } else {
            return 'false';
        }
    }
}

?>