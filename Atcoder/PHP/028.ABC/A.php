<?php
fscanf(STDIN,"%d",$moriyama);

if($moriyama == '100'){
  echo 'Perfect'."\n"; } elseif($moriyama>='90' && $moriyama<='99'){
  echo 'Great'."\n"; } elseif($moriyama>='60' && $moriyama<='89'){
  echo 'Good'."\n"; } else{
  echo 'Bad'."\n"; }