<?php
$s_arr= trim(fgets(STDIN));

if ($s_arr[0]===$s_arr[1] || $s_arr[1]===$s_arr[2] || $s_arr[2]==$s_arr[3]) {
    echo "Bad" ;} else{
    echo "Good";}

?>