<?php
    $ema = trim(fgets(STDIN));;
    $watson = '9';

    if ( strpos($ema, $watson) !== false ) {
        echo 'Yes';} else {
        echo 'No';}