<?php
    //使用mysqli连接MYSQL
    $host = "127.0.0.1";  //mysql的主机地址
    $user = 'root';    //数据库的用户名
    $pass = 'root';  //数据库密码
    $db = "php2102";   //使用数据库

    $link = new mysqli($host,$user,$pass,$db);

    //向数据库中写入数据
    $sql = "insert into users (`username`,`email`,`mobile`,`password` )
 values ('zhangsan111','zhangsan111@qq.com','12352462156','xxxxxx')";

   //准备阶段
    $stmt = mysqli_prepare($link,$sql);
    var_dump($stmt);
    echo '<hr>';
    echo '<pre>';print_r($stmt);echo '</pre>';

    echo '<hr>';
    //执行阶段
    mysqli_stmt_execute($stmt);
    echo '<pre>';print_r($stmt);echo '</pre>';