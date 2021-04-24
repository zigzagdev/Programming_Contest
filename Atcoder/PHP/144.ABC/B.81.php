<?php
fscanf(STDIN,"%d",$a);

for($i=0;$i<10; $i++) {
    for($j=0; $j<10; $j++) {
        if($i*$j==$a){
            echo "Yes";
            return;
        }
    }
}
echo "No";
?>
