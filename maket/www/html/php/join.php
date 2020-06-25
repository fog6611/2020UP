<?php
    echo $_POST[username]." ".$_POST[password]." ".$_POST[password2]." ".$_POST[email]."<br>"; 
    if (isset($_POST['username'])) { $username = $_POST['username']; if ($username == '') { unset($username);} }
    //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['password'])) { $password2=$_POST['password2']; if ($password2 =='') { unset($password2);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
    if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }
    echo $username." ".$password." ".$password2." ".$email."<br>"; 
    if (!($password == $password2)) { exit("пароли не совпадают"); }
    if (empty($username) || empty($password) || empty($email)) { //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    echo "ввод переменных успешен<br>"; 
    
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $username = stripslashes($username);
    $username = htmlspecialchars($username);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    //удаляем лишние пробелы
    $username = trim($username);
    $password = trim($password);
    $email = trim($email);
    // подключаемся к базе
    include './connectAsUser.php';
    
    
    // проверка на существование пользователя с таким же логином и email
    $result = $CONNECTASUSER->query("SELECT * FROM `userslist` WHERE `username`='$username'") 
        or die("Ошибка " (" . {$CONNECTASUSER->connect_errno}"));
    echo $result;
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) { exit ("Этот логин занят, введите другой.");}
    $result = $CONNECTASUSER->query("SELECT * FROM `userslist` WHERE `email`='$email'") 
        or die("Ошибка " (" . {$CONNECTASUSER->connect_errno}"));
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) { exit ("Этот email занят, введите другой.");}
    // если такого нет, то сохраняем данные
    else { echo "проверка на совпадение успешна";
    
    $result2 = $CONNECTASUSER->query("INSERT INTO `userslist` (`username`,`password`,`email`) VALUES('$username','$password','$email')") 
        or die("Ошибка " (" . {$CONNECTASUSER->connect_errno}")); } 
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE') {
        exit("успешная регистрация");
    }
    else {
        exit("по каким-то причинам провальная регистрация");
    }
?>
