<?php
function getUserInfo($user) {
    $rockatuserU = 'rockatartuser';
    $rockatuserP = '.sLzNUbJdQ7qk4IR5.';
    $CONNECTASUSER = new mysqli('localhost:3306', $rockatuserU, $rockatuserP, 'rockatart')
    or die("Ошибка " (" . {$mysqli->connect_errno}"));
    $result = $CONNECTASUSER->query("SELECT * FROM `userslist` WHERE `id`='{$user}'");
    $row = mysqli_fetch_row($result);
    echo $row[1];
    $row = NULL;
    mysqli_free_result($result);
}

function getPicture() {
    $rockatuserU = 'rockatartuser';
    $rockatuserP = '.sLzNUbJdQ7qk4IR5.';
    $CONNECTASUSER = new mysqli('localhost:3306', $rockatuserU, $rockatuserP, 'rockatart')
    or die("Ошибка " . mysqli_error($link));
    $result = $CONNECTASUSER->query("SELECT * FROM `postslist` WHERE `authorid`={$_GET[user]}");
    if($result) {
        $rows = mysqli_num_rows($result);
        for($r = 0;$r < $rows;$r++){
            $row = mysqli_fetch_row($result);
            if($row) {
                $name = $row[1];
                $minheight = 150;
                $width = $minheight*$row[4];
                $filepath = $row[5];
                echo "<div class='pic'><div><div>{$name}</div><a href='{$filepath}'><img width='{$width}' height='{$minheight}' src='{$filepath}'</a></div></div>";
                $row = NULL;
            }
        }
        mysqli_free_result($result);
    }
}