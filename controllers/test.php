<?php

    class Test extends Controller{
        public function __construct(){
            echo "Day la controller test";
        }
        function index(){
            echo "đây là phương thức index controller test";
        }
        function test($a, $b, $c, $d){
            echo $a, $b, $c, $d;
        }
        
    }

?>