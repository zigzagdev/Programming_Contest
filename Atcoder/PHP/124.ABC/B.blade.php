<?php
$kazu=(trim(fgets(STDIN)));
$mountains=explode(" ",trim(fgets(STDIN)));

$tallest=$mountains[0];
$sum=0;

for($i=0;$i<$kazu;$i++){
    if($tallest<=$mountains[$i]){
        $sum +=1;
        $tallest=$mountains[$i];
    }
}
echo $sum ;
?>