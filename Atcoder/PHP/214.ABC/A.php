<?php
fscanf(STDIN, "%d", $evisjap);

if ($evisjap < 126) {
  echo 4 ; } elseif ($evisjap < 212) {
  echo 6 ; } else {
  echo 8 ;}