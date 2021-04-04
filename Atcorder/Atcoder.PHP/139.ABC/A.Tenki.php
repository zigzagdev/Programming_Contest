<?php
$s= trim(fgets(STDIN));
$t= trim(fgets(STDIN));
$count = 0;

for($i = 0; $i <3; $i++){
    if($s[$i]==$t[$i]) {
        $count += 1 ;} else {
        $count += 0 ;}
}
echo $count;
?>
