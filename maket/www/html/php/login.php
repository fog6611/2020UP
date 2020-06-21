<?php
echo 'l'.$_POST['username'].'<br>';
echo 'p'.$_POST['password'].'<br>';
error_reporting(0);
if(empty($_POST['username'])) {
    echo 'Вы не ввели логин';
} elseif(empty($_POST['password'])) {
    echo 'Вы не ввели пароль';
}
else
{
    $query = "
        SELECT `id`
        FROM `userslist`
        WHERE `username`='{$_POST['username']}' AND `password`='{$_POST['password']}'
    ";

    $sql = mysql_query($query) or die(mysql_error());
    if (mysql_num_rows($sql) == 0) {
        echo 'Сначала зарегестрируйтесь';
    }
    else {
        header('Location:index.php');
        exit();
    }
}
exit();

