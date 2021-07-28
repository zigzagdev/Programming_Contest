<?php
$evis = str_split(trim(fgets(STDIN)));

for($i=0;$i<count($evis);$i++){
 if($i%2 == 0){
   if(ctype_upper($evis[$i])){
    echo 'No' ;
    exit;}
 }
 if($i%2 != 0){
  if(ctype_lower($evis[$i])){
    echo 'No' ;
    exit;}
 }
}
echo 'Yes';