<?php
    $DB_link = mysqli_connect('localhost', 'myuser', 'mypassword');
    //var_dump($DB_link);
    if(!$DB_link) {
        exit('数据库链接失败');
    }

    mysqli_set_charset($DB_link, 'utf8');

    mysqli_select_db($DB_link, 'mydb');

    $sql = 'select * from user';

    $res = mysqli_query($DB_link, $sql);

    // while($rows = mysqli_fetch_assoc($res)) {
    //     var_dump($rows);
    // }
    echo '<table width="600" border="1">';
        echo '<th>名称</th><th>年龄</th>';
        while ($rows = mysqli_fetch_assoc($res)) {
            echo '<tr>';
                echo '<td>'.$rows[name].'</td>';
                echo '<td>'.$rows[age].'</td>';
                echo '<td><a href="del.php?id='.$rows[id].'">删除</a>/<a href="update.php?id='.$rows[id].'">添加</a></td>';
            echo '</td>';
        }
    echo '</table>';

    mysqli_close($DB_link);
    