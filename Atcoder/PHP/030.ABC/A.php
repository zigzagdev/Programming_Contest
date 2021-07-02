<?php
fscanf(STDIN, "%d%d%d%d", $kes,$moriyama,$fuji,$evis);

if($kes/$moriyama>$fuji/$evis) {
  echo 'AOKI'."\n";} elseif($kes/$moriyama == $fuji/$evis){
  echo 'DRAW'."\n";} else{
  echo 'TAKAHASHI'."\n";}