<?php

    //接收 form 表单数据 $_POST,是否符合规则


echo '<pre>';print_r($_POST);echo '</pre>';
    //使用mysqli连接MYSQL
    $host = "127.0.0.1";  //mysql的主机地址
    $user = 'root';    //数据库的用户名
    $pass = 'root';  //数据库密码
    $db = "php2102";   //使用数据库

    $link = new mysqli($host,$user,$pass,$db);

    //连接数据库
    $link = new mysqli($host,$user,$pass,$db);

    //处理变量
    $username = trim($_POST['u_name']);
    $mobile = trim($_POST['u_mobile']);
    $email = trim($_POST['u_email']);
    $pass1 = trim($_POST['u_pass1']);
    $pass2 = trim($_POST['u_pass2']);
    $reg_time = time();       //注册时间
    $age = intval($_POST['u_age']);   //年龄
    $upass = password_hash($pass1,PASSWORD_BCRYPT);



//sql 语句
    $sql = "insert into users (`username`,`mobile`,`email`,`pass`,`reg_time`,`age`) 
    values ('{$username}','{$mobile}','{$email}','{$upass}','$reg_time','$age)";

    //准备阶段
    $stmt = mysqli_prepare($link,$sql);

    //执行阶段
    $result = mysqli_stmt_execute($stmt);

    if($result){
        echo "insert 成功";
    }else{
        echo "insert 失败";
    }


