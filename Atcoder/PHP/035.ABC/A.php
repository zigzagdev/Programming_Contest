<?php
fscanf(STDIN,"%d %d", $W, $H);
if($W/$H == 4/3){
	echo "4:3"."\n" ;
}else{
	echo "16:9"."\n";
}
?>