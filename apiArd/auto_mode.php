<?php
    
    $arg1 = $_GET["room"];
    date_default_timezone_set('America/Bogota');
    $day = date("N");
    $arg2 = decbin($day);
    $arg3 = 0;
    $hora = date("H");
    
        if($hora>=0 && $hora<=2){
            $arg3=0;
        }elseif($hora>=3 && $hora<=5){
            $arg3=1;
        }elseif($hora>=6 && $hora<=8){
            $arg3=10;
        }elseif($hora>=9 && $hora<=11){
            $arg3=11;
        }elseif($hora>=12 && $hora<=14){
            $arg3=100;
        }elseif($hora>=15 && $hora<=17){
            $arg3=101;
        }elseif($hora>=18 && $hora<=20){
            $arg3=110;
        }elseif($hora>=21 && $hora<=23){
            $arg3=111;
        }
    //echo "Today is $day.";
    //echo ($arg2);
    //echo ("\n");
    //echo ($arg3);   
    exec("python auto_mode.py $arg1 $arg2 $arg3");

?>