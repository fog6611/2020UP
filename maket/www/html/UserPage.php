<!DOCTYPE html>
<?php
include_once './php/UserPage.php';
$userid = $_GET[user];
?>
<html>
<head>
    <meta charset="UTF-8">
    <title> User </title>
    <link rel="stylesheet" href="css/MainPage.css">
</head>
<body>
    <header>
        <nav>
            <div class="top-menu">
                <div><a href="index.php">
                        <img src="image/LOGO_main(646*276).png"
                            alt="RockatLogo" height="70" width="200">
                    </a>
                </div>
                <div class="search">Search</div>
                <div class="_2HOTE">
                    <a class="join" href="JoinPage.php">Join</a>
                    <a class="logIn" href="LogInPage.php">Log In</a></div>
                    <div class="HSpace"></div>
            </div>
        </nav>
    </header>
<div class="UserLogo">
    <div class="userInfo">
        <div class="Avatar"><img src="image/avatar.png" height="60" width="60"></div>
    <h1><?php getUserInfo($_GET[user]);?></h1>
    </div>
</div>
<ul class="UserBar">
    <li class="UBElem"><a class="MHYQBU" href="UserPage.php?user-'<?php echo $userid;?>'"><span class="_2_hKv">Gallery</span></a></li>
</ul>
<div class="mainbody">
    <?php getPicture();?>
</div>
    <footer>
        <div>
            <div><a href="AboutPage.html"><img src="/image/About.png" width="14" height="14" alt="(i)">About us</a></div>
        </div>
        <div><img src="image/LOGO_main(646*276).png" alt="RockatLogo" height="70" width="200"></div>
    </footer>
</body>
</html>