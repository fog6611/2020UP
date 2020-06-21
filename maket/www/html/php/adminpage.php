<?php
function getSomething($something) {
    if(!$something) {
        echo "<div class='create'>";
        echo "<div class='user'>Create User<br>";
        echo "  <form action='AdminPage.php' method='post'>
                <label for='username' class='Lable'>Username</label><br>
                <input type='text' name='username'><br>
                <label for='password' class='Lable'>Password</label><br>
                <input type='text' name='password'><br>
                <label for='email' class='Lable'>Email</label><br>
                <input type='text' name='email'><br>
                <input type='submit' name='createuser' value='Create User'>
                </form>";
        echo "</div><div class='post'>Create Post<br>";
        echo "  <form action='AdminPage.php' method='post'>
                <label for='postname' class='Lable'>Post Name</label><br>
                <input type='text' name='postname'><br>
                <label for='authorid' class='Lable'>Author's Id</label><br>
                <input type='text' name='authorid'><br>
                <label for='authorname' class='Lable'>Autor Name</label><br>
                <input type='text' name='authorname'><br>
                <label for='aspectratio' class='Lable'>Aspect Ratio</label><br>
                <input type='text' name='aspectratio'><br>
                <label for='path' class='Lable'>Path to Img</label><br>
                <input type='text' name='path'><br>
                <input type='submit' name='createpost' value='Create Post'>
                </form>";
        echo '</div></div>';
    }
    
    if($something[userslist]) {
        $rockatadminU = 'rockatartadmin';
        $rockatadminP = '.O8d0Giag7W2Ddvz9.';
        $CONNECTASUSER = new mysqli('localhost:3306', $rockatadminU, $rockatadminP, 'rockatart')
        or die("Ошибка " . mysqli_error($link));
        $result = $CONNECTASUSER->query("SELECT * FROM `userslist`") 
            or die("Ошибка " (" . {$mysqli->connect_errno}"));
        if($result) {
            $rows = mysqli_num_rows($result);
            echo "<table><tr><th>Id</th><th>username</th><th>password</th><th>email</th></tr>";
            for ($i = 0 ; $i < $rows ; ++$i)
            {
                $row = mysqli_fetch_row($result);
                echo "<tr>";
                    for ($j = 0 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
                echo "<th>";
                echo "<form action='AdminPage.php' method='post'>";
                echo "<input type='text' value='{$row[0]}' name='number'><input type='submit' value='delete' name='userdelete'>";
                echo "<form>";
                echo "</th></tr>";
            }
            echo "</table>";
            mysqli_free_result($result);
        }
    }
    
    if($something[postslist]) {
        $rockatadminU = 'rockatartadmin';
        $rockatadminP = '.O8d0Giag7W2Ddvz9.';
        $CONNECTASUSER = new mysqli('localhost:3306', $rockatadminU, $rockatadminP, 'rockatart')
        or die("Ошибка " . mysqli_error($link));
        $result = $CONNECTASUSER->query("SELECT * FROM `postslist`") 
            or die("Ошибка " (" . {$mysqli->connect_errno}"));
        if($result) {
            $rows = mysqli_num_rows($result);
            echo "<table><tr><th>Id</th><th>name</th><th>authorname</th><th>authorid</th><th>acpectratio</th><th>path</th><th>delete</th></tr>";
            for ($i = 0; $i < $rows; ++$i)
            {
                $row = mysqli_fetch_row($result);
                echo "<tr>";
                    for ($j = 0 ; $j < 6 ; ++$j) echo "<td>$row[$j]</td>";
                echo "<th>";
                echo "<form action='AdminPage.php' method='post'>";
                echo "<input type='text' value='{$row[0]}' name='number'><input type='submit' value='delete' name='postdelete'>";
                echo "<form>";
                echo "</th></tr>";
            }
            echo "</table>";
            mysqli_free_result($result);
        }
    }
    
    if($something[createuser]) {
        $rockatadminU = 'rockatartadmin';
        $rockatadminP = '.O8d0Giag7W2Ddvz9.';
        $CONNECTASUSER = new mysqli('localhost:3306', $rockatadminU, $rockatadminP, 'rockatart')
        or die("Ошибка " . mysqli_error($link));
        $CONNECTASUSER->query("INSERT INTO `userslist` (`id`, `username`, `password`, `email`) "
                . "VALUES (NULL, '{$something[username]}', '{$something[password]}', '{$something[email]}');")
            or die("Ошибка " (" . {$mysqli->connect_errno}"));
    }
    
    if($something[createpost]) {
        $rockatadminU = 'rockatartadmin';
        $rockatadminP = '.O8d0Giag7W2Ddvz9.';
        $CONNECTASUSER = new mysqli('localhost:3306', $rockatadminU, $rockatadminP, 'rockatart')
        or die("Ошибка " . mysqli_error($link));
        $CONNECTASUSER->query("INSERT INTO `postslist` (`id`, `postname`, `authorname`, `authorid`, `aspectratio`, `urlname`) "
                . "VALUES (NULL, '{$something[postname]}', '{$something[authorname]}', "
                . "'{$something[authorid]}', '{$something[aspectratio]}', '{$something[path]}');")
            or die("Ошибка " (" . {$mysqli->connect_errno}"));
    }
    
    if($something[userdelete]) {
        $rockatadminU = 'rockatartadmin';
        $rockatadminP = '.O8d0Giag7W2Ddvz9.';
        $CONNECTASUSER = new mysqli('localhost:3306', $rockatadminU, $rockatadminP, 'rockatart')
        or die("Ошибка " . mysqli_error($link));
        $CONNECTASUSER->query("DELETE FROM `userslist` WHERE `userslist`.`id`='{$something[number]}'")
            or die("Ошибка " (" . {$mysqli->connect_errno}"));
        $CONNECTASUSER->query("DELETE FROM `postslist` WHERE `postslist`.`authorid`='{$something[number]}'")
            or die("Ошибка " (" . {$mysqli->connect_errno}"));
    }
    
    if($something[postdelete]) {
        $rockatadminU = 'rockatartadmin';
        $rockatadminP = '.O8d0Giag7W2Ddvz9.';
        $CONNECTASUSER = new mysqli('localhost:3306', $rockatadminU, $rockatadminP, 'rockatart')
        or die("Ошибка " . mysqli_error($link));
        $CONNECTASUSER->query("DELETE FROM `postslist` WHERE `postslist`.`id`='{$something[number]}'")
            or die("Ошибка " (" . {$mysqli->connect_errno}"));
    }
}