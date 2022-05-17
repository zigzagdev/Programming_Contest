<?php
function singleNumber($nums) {
  $counts = array();
  for($i = 0; $i < count($nums); $i++){
    $key = $nums[$i];
    $counts[$key] = (in_array($key, $nums)) ? $counts[$key] + 1 : 1;
  }
  $result = array_search( 1, $counts ) ;
  return($result);
}
?>