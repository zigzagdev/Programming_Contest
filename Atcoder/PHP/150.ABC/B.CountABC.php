<?php
fscanf(STDIN, "%d",$t);
$subject=trim(fgets(STDIN));

$obj="ABC";
echo substr_count($subject,$obj);

?>
