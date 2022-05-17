<?php
fscanf(STDIN, "%d", $a);

if($a>=64){
  echo "64";}elseif($a>=32){
  echo "32";}elseif($a>=16){
  echo "16";}elseif($a>=8){
  echo "8";}elseif($a>=4){
  echo "4";}elseif($a>=2){
  echo "2";}else{
  echo "1";}
