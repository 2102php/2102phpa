<?php
    $arr = ["zhangsan","lisi","Baby","Mike","Abc","John","Jack","Zhaoliu"];

    $name = "lisi";

    if( in_array($name,$arr) ){
        echo "$name 存在";
    }else{
        echo " $name 不存在";
    }