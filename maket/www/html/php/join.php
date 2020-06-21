<?php
if ($_POST['gojoin']) {
    if (empty($_POST['login'])) {
        header('Location:join.php');
        exit();
    } elseif (empty($_POST['password'])) {
        header('Location:join.php');
        exit();
    } elseif (empty($_POST['email'])) {
        header('Location:join.php');
        exit();
    } else {
    mysql_query($CONNECTASUSER, "INSERT INTO 'userslist'('id', 'login', 'password', 'email') VALUES (0, '{$_POST['username']}', '{$_POST['password']}', '{$_POST['email']}')");
    }   
}

header('Location:index.php');
exit();