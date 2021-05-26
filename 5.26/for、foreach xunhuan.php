<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $list = [
        'AAAA',
        'BBBB',
        'CCCC',
        'DDDD',
    ];
    ?>
    <ul>
        <?php
            // foreach($list as $k=>$v){
            //     echo "<li>".$v."</li>";
            // }
            $length  = count($list);
            for($i=0;$i<$length;$i++){
               echo "<li>".$list[$i]."</li>";
           }
        ?>
    </ul>
    
</body>
</html>