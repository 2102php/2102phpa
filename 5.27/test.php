<?php
    //接收 POST传参
    echo '<pre>';print_r($_POST);echo '</pre>';

    //获取用户名
    $user_name = $_POST['u_name'];
    //验证用户名是否符合用户名规则   大小写英文字母 不少于6
    $patten = "/^[a-zA-Z]{6,}$/";

    if( !preg_match($patten,$user_name) ){
        echo "用户名不符合规则";
        echo "<br>";
    }

    //获取手机号
    $user_tel = $_POST['u_tel'];
    //验证手机号位11位
    $patten = "/^\d{0,11}$/";

    if( !preg_match($patten,$user_tel) ){
        echo "手机号不符合规则";
        echo "<br>";
    }

    //获取密码
    $user_pass = $_POST['u_pass1'];
    //验证密码由数字字母下划线组成与确认密码必须一致 不少10位
    $patten = "/^[0-9a-z_]{6,}$/";

    if( !preg_match($patten,$user_pass) ){
        echo "密码不符合规则";
        echo "<br>";
    }
    $user_pass1 = $_POST['u_pass2'];
    if($user_pass1!=$user_pass){
        echo "密码与确认密码不一致";
        echo "<br>";
    }


    