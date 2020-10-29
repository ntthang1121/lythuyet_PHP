<?php
    for($i = 0; $i < 5; $i++){
        echo "$i";
    };


    $mang = array('ptu 1', 2, 3);
    $mang2 = array(
        'key1' => 'ptu 1',
        'key2' => 2, 
        'key3' => 3
    );

    $hihi = [
        'toan' => 10,
        'td' => 10 
    ];

    foreach ($mang as $key => $value){
        echo $key.'=>'.$value;
    }
    array_push($mang, 'thang dep trai'); // them phan tu vao mang
    var_dump($mang);
    array_push($mang, $hihi);
    $arrgop = array_merge($mang, $hihi); //gop mang
    $ptuktra = 2;
    in_array($ptuktra, $mang) //ktra ptu co trong mang k
    // array_key_exists('key1', $mang) //ktra key co trong mang k
    // array_slice($mang, 1) // cat ptu 1 trong mang di
?>