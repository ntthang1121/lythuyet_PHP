<?php
    //ktra va lay du lieu
    // if(isset($_COOKIE['thang'])){
    //     setcookie('thang', 'thang very handsome', time() + (86400*30), '/');
    //     $user_name = ($_COOKIE['thang']);
    //     echo $user_name;
    // }

    //huy cookie
    setcookie('thang', 'very handsome', time() - (86400*30), '/');
    if(isset($_COOKIE['thang'])){
        setcookie('thang', 'thang very handsome', time() - (86400*30), '/');
        $user_name = ($_COOKIE['thang']);
        echo $user_name;
    }
    else{
        echo 'cc';
    }
?>