<?php
    // cookie: du lieu luu trong may. tat trinh duyet mo lai van co
    //tao cookie
    //setcookie('thang', 'very handsome', time() + (86400*30), '/');



    //session: tat trinh duyet la mat

    session_start();
    $_SESSION['color'] = 'trang';
    echo  $_SESSION['color'];

    $_SESSION['color'] = 'xanh';
    echo  $_SESSION['color'];

    session_unset();
    session_destroy();
    $kq = isset($_SESSION['color']) ? isset($_SESSION['color']) : "";
    echo $kq;
    
?>