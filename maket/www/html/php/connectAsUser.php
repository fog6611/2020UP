<?php
$rockatuserU = 'rockatartuser';
$rockatuserP = '.sLzNUbJdQ7qk4IR5.';
$CONNECTASUSER = new mysqli('localhost:3306', $rockatuserU, $rockatuserP, 'rockatart')
    or die("Ошибка " (" . {$CONNECTASUSER->connect_errno}"));
    echo "подключение к базе данных успешно<br>"; 