<?php
    class View{
        function __construct(){
            
        }
        function view($name, $data = array()){
            require "view/".$name.".php";
        }
    }

    
?>