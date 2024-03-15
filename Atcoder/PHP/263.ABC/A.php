<?php
$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));

sort($arr);

if (($arr[0] === $arr[2] && $arr[3] === $arr[4]) || ($arr[0] === $arr[1] && $arr[2] === $arr[4])) {
    echo "Yes";
} else {
    echo "No";
}


//array_map('intval', explode(' ', trim(fgets(STDIN))));
//配列の1行での作成