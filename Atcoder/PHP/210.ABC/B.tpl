<?php
fscanf(STDIN,"%s",$moriyama);
fscanf(STDIN,"%s",$kes);

$fuji = str_split(trim($kes));
$evisjap = array_search( "1", $fuji);

 if ($evisjap%2 == 0){
   echo "Takahashi";} else {
   echo "Aoki";}
