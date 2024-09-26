<?php

    ob_start();
    session_start([
        'cookie_lifetime'=>86400,
    ]);
    $_SESSION['any']='test value';
    echo $_SESSION['any'];

    //session_destroy();


    ob_end_flush();