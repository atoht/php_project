<?php
    $DB_link = mysqli_connect('localhost', 'myuser', 'mypassword');
    //var_dump($DB_link);
    if(!$DB_link) {
        exit('数据库链接失败');
    }

    mysqli_set_charset($DB_link, 'utf8');

    mysqli_select_db($DB_link, 'mydb');

    $id = $_GET['id'];

    $sql = "delete from user where id = $id";

    $boolean = mysqli_query($DB_link, $sql);
    if($boolean && mysqli_affected_rows($DB_link)) {
        echo '<a href="test.php">删除成功</a>';
    }else {
        echo '<a href="test.php">删除失败</a>';
    }

    mysqli_close($DB_link);