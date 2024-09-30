<?php

    ob_start();
    session_start([
        'cookie_lifetime'=>86400,
    ]);
    $_SESSION['any']='test value';
    echo $_SESSION['any'];

    //session_destroy();

    setcookie('any','test value',time()+86400);
    ob_end_flush();