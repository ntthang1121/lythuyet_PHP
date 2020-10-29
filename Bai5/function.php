<?php
    function ham(){
        echo 'hihi';
    }
    ham();

    //tham tri
    $a = 5;
    function tham_tri($thamtri){
        $thamtri++;
        echo $thamtri;
    }
    // tham_tri($a);
    // echo $a; // a k doi
    //tham chieu
    function tham_chieu(&$thamchieu){
        $thamchieu++;
        echo $thamchieu;
    }
    // tham_chieu($a);
    // echo $a; // a thay doi

    //ham ano : nac danh
    $ham_ano = function(){
        echo 'hehe';
    };
    //$ham_ano();
    $so = 1;
    $arr_func = [
        'func1' => function(){
            echo 'Ham 1';
        },
        'func2' => function($thamtri = 1){
            $thamtri++;
            echo 'ham 2'.$thamtri;
        },
        'func3' => function(&$thamchieu){
            $thamchieu++;
            echo 'ham 3'.$thamchieu;
        }

    ];
    $arr_func['func1']();
    $arr_func['func2']($so);
    $arr_func['func3']($so);

    //call back
    $mang = [1,2,3,5];
    array_walk($mang , function($value, $key){
        echo 'phan tu thu'.$key.'co gia tri'.$value ;
    });

    //closure
    $message = 'day la thong bao';
    $thang = function() use ($message){
        echo $message;
    };
    $thang();

?>