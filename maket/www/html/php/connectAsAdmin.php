<?php
$rockatadminU = 'rockatartadmin';
$rockatadminP = '.O8d0Giag7W2Ddvz9.';
$CONNECTASADMIN = new mysqli('localhost:3306', $rockatadminU, $rockatadminP, 'rockatart')
    or die("Ошибка " (" . {$CONNECTASADMIN->connect_errno}"));
