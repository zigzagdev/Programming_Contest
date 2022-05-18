<?php

class Solution {

  /**
   * @param Integer[] $digits
   * @return Integer[]
   */
  function plusOne($digits) {
    $digits = array_reverse($digits);
    foreach($digits as $key => $digit)
      if($digit == 9){
        $digits[$key] = 0;
      }else{
        $digits[$key]++;
        return array_reverse($digits);
      }
    array_push($digits, 1);
    return array_reverse($digits);
  }
}
?>