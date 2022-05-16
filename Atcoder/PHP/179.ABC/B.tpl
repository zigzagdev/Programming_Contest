<?php
fscanf(STDIN, "%d",$b);

$count =0;
for($i =0; $i<$b; $i++){
    fscanf(STDIN, "%d%d",$w,$x);
    if($w==$x){
        $count +=1;} else{
        $count =0;}
    if($count>=3){
        echo "Yes"; exit;}
}
echo "No";
?>
