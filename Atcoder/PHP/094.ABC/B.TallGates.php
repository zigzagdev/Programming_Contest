<?php
fscanf(STDIN, "%d%d%d", $n,$m,$x);
$place=explode(" ",trim(fgets(STDIN)));

$count =0;
$contre=0;

for($i=0;$i<$m;$i++){
    if($place[$i]>$x){
        $count +=1;} else{
        $contre +=1;
    }
}
echo min($count,$contre);

?>
