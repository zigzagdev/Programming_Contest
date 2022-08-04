<?php
function largeGroupPositions($s) {
    $count = strlen($s);
    $evisjap = [];
    $sta;
    $end;
    for($i=0;$i<$count;$i++){
        if($s[$i] == $s[$i+1] && $s[$i] == $s[$i+2]){
            $sta = $i;
            for($j=$i;$j<=1000;$j++){
                if($s[$i] != $s[$j]){
                    $end = $j - 1 ;
                    array_push($evisjap, [$sta, $end]);
                    break;
                }
                //$jを$iに渡すことで、$iの続きを$jから引き継ぐ。
                $i = $j;
            }
        }
    }
    return $evisjap;
}