<?php
fscanf(STDIN, "%d", $N);
if ($N%1000 == 0) {
    echo 0 ;}
else
{echo 1000-($N%1000);}
?>