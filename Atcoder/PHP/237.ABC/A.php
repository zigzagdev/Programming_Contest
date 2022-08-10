<?php
fscanf(STDIN, "%d", $kes);
if(pow(-2, 31) <= $kes && $kes < pow(2, 31)){
  echo 'Yes';}else{
  echo 'No';}