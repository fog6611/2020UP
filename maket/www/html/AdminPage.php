<!DOCTYPE html>
<?php
include './php/adminpage.php';
?>
<html>
    <head>
        <title>Admin Panel</title>
        <link rel="stylesheet" href="css/AdminPage.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            <nav>
                <div class="top-menu">
                    <h1 class="logo">RockatArt Административная панель</h1>
                    <a class="exit" href="index.php">Выйти</a>
                </div>
            </nav>
        </header>
        <div class="sidebar">
            <ul><form action="AdminPage.php" method="post">
                    <li><input type="submit" value="Create" name=""></li>
                    <li><input type="submit" value="Users List" name="userslist"></li>
                    <li><input type="submit" value="Posts List" name="postslist"></li>
                </form></ul>
        </div>
        <div class="mainfield">
            <?php
            getSomething($_POST);
            ?>
        </div>
    </body>
</html>

