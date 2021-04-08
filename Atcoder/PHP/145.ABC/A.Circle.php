<?php
fscanf(STDIN, "%d", $a);

echo $a*$a ;

?>



$Fruits = array('apple' => 100, 'banana' => 200, 'grape'=> 300,'melon'=> 1000,'peach' => 400);

foreach($Fruits as $key=>$val){

$average=array_sum($Fruits)/count($Fruits);
}
echo '果物の平均価格は'.$average.'円です';
?>