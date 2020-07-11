<?php
$DB_link = mysqli_connect('localhost', 'myuser', 'mypassword');
//var_dump($DB_link);
if(!$DB_link) {
    exit('数据库链接失败');
}

mysqli_set_charset($DB_link, 'utf8');

mysqli_select_db($DB_link, 'mydb');

$id = $_GET['id'];

$sql = "select * from user where id =$id";

$res = mysqli_query($DB_link, $sql);
$rows = mysqli_fetch_assoc($res);

mysqli_close($DB_link);

?>

<html>
    <form action="doUpdate.php">
        名称:<input type="text" value="<?php echo $rows[name]; ?>" />
        年龄:<input type="text" value="<?php echo $rows[age]; ?>" />
        <input type="submit" value="执行修改"
    </form>
</html>