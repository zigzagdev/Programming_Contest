<?php
fscanf(STDIN, "%d", $evisjap);

if($evisjap %100 == 0){
 echo $evisjap/100 ; } else {
 echo floor($evisjap/100)+1 ;}