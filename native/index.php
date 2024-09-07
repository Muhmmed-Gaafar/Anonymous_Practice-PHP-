<?php

    $a = 'welcome to php ';

    //echo str_replace('to','in' , $a);
    $result = explode(' ',$a);
    echo $result[1];
    echo '<br>';
    $ar = ['we','ew'];

    echo count($ar);