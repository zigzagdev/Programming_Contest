
<?php
fscanf(STDIN, "%d%d", $a,$b);
$c = trim(fgets(STDIN));

for($i =0; $i< $a; $i++) {
    if($c[$i]=="o") {
        $b+= 1;} elseif($c[$i] == "x" && $b != 0){
        $b+= -1;}
}
echo $b;
?>

PHPでforを使う時でifでの条件分岐の際は、該当する番号の判定時には必ず判定する要素のkey番号を指定してあげる。