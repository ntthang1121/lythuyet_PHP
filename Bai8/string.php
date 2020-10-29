<?php
    $str = "thang";
    $a = print($str);
    echo $a;
    printf("Day la %s", $str);
    $arr = array(
        'key' => 'value'
    );
    print_r($arr); // xem cau truc cua bien
    echo '<pre>';
    print_r(new class('thang' , 21){
        public $name;
        public $age;
        public function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }
        
    });
    echo '</pre>';

    $a = 'thang, thao, vu, hieu';
    $kq = explode(',', $a, 4); // tach chuoi theo dau ','
    var_dump($kq);

    $b = implode(',', $kq); // noi chuoi
    echo $b;

    $c = '123456';
    $kq = str_split($c); //cat chuoi    
    echo '<pre>';
    print_r($kq);
    echo '</pre>';

    $kq = str_replace('5', '9', $c); //thay the 5 trong $c = 9 (co the thay the mang cho mang)
    echo $kq;

    $d = "hihi";
    $kq = str_repeat($d, 5); // lap lai $d 5 lan
    echo $kq;

    $f = 'hehe';
    $kq = substr($f, 1, 3); //bo ki tu 1 va lay sau do 3 ki tu
    echo $kq;

    $e = 'hahahha hihi hehe';
    $kq = strstr($e, 'hihi'); // lay tu hihi ve sau va co phan biet hoa thuong
    $kq2 = stristr($e, 'Hihi'); // lay tu hihi ve sau va k phan biet hoa thuong
    echo $kq;
    echo $kq2;

    $f = 'heohe';
    $kq = strpos($f, 'o'); //tra ve vi tri cua ki tu
    echo $kq;

    $f = 'heohe';
    $kq = strtoupper($f); //chu hoa
    echo $kq;
    $kq = strtolower($f); // chu thuong
    echo $kq;

    $kq = ucfirst($f); // viet hoa chu dau
    echo $kq;

    $kq = strlen($f); //do dai chuoi
    $kq = trim($f); //bo khoang trong
    echo $kq;

    $k = 'thang.
    dep trai';
    $kq = nl2br($k); //giu nguyen chuoi duoc gi
    echo $k;

    $h = '<b>AABB</b>';
    $kq = htmlentities($h); //giu nguyen noi dung html neu k no se thuc thi the html
    echo $kq;

    $arr = [
        'key1' => 'value1',
        'key2' => 'value2'
    ];

    $json = json_encode($arr); // chuyen 1 mang thanh kieu json
    echo $json;

    $temp = json_decode($json); // chuyen 1 json thanh kieu obj
    var_dump($temp);

?>