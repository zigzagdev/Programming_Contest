<?php
fscanf(STDIN, "%d",$n);


 function calcL($n) {
        global $array;
          $array[0] = 2;
             $array[1] = 1;
        if (isset($array[$n])) {
            return $array[$n]
                } else {
            $array[$n] = calcL($n - 1) + calcL($n - 2);
      return $array[$n];
        }
    }
    echo calcL($n) . PHP_EOL;