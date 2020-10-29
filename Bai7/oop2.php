<?php
    // trait: đa thừa kế nhưng chỉ hỗ trợ cho function
    trait Trait_1 {
        function say_hello(){
            echo 'Hello world';
        }
    }
    trait Trait_2 {
        function say_goodbye(){
            echo 'Good bye';
        }
    }
    // class Trait_Example {
    //     use Trait_1;
    //     use Trait_2;
    // }
    trait Trait_4 {
        function say_1(){
            echo 'Hi One';
        }
        function say_2(){
            echo 'Hi Two';
        }
    }
    // trait Trait_5 {
    //     function say_protected(){
    //         echo 'Hi Protected';
    //     }
    //     function say_private(){
    //         echo 'Hi Private';
    //     }
    // }
    // class Trait_Example {
    //     use Trait_1;
    //     use Trait_2;
    //     use Trait_3, Trait_4 {
    //         Trait_3::say_1 insteadof Trait_4;
    //         Trait_4::say_2 insteadof Trait_3;
    //     }
    // }
    trait Trait_5 {
        function say_protected(){
            echo 'Hi Protected';
        }
        function say_private(){
            echo 'Hi Private';
        }
    }
    class Trait_Example {
        use Trait_1;
        use Trait_2;
        use Trait_3, Trait_4 {
            Trait_3::say_1 insteadof Trait_4; //lua chon trait
            Trait_4::say_2 insteadof Trait_3;
        }
        use Trait_5 {
            say_protected as public ex_say_protected; // thay doi trang thai
            say_private as private ex_say_private;
        }
    }
    $ex = new Trait_Example();
    $ex -> say_1();
    $ex -> say_2();


// $this : chinh doi tuong nay
// $self : chinh lop nay
// trong static function k dung this dc ma dung self or static.









?>