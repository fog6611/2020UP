<!DOCTYPE html>
<?php
include_once './php/search.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title> Rockat </title>
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
                    <div class="search">
                        <form action='SearchPage.php' method='post'>
                            <input type="search" name="search" placeholder="Search">
                        
                    </div>
                    <div class="_2HOTE">
                        <a class="join" href="JoinPage.php">Join</a>
                        <a class="logIn" href="LogInPage.php">Log In</a></div>
                        <div class="HSpace"></div>
                </div>
            </nav>
        </header>
        <div class="Typebar">
            <input class="" type="radio" name="posts"><p>По изображениям</p>
            <input class="" type="radio" name="authors" ><p>По авторам</p>
        </div></form>
    <div class="mainbody">
        <p class="searchresult">result to: <?php echo $_POST[search];?></p>
        <?php
        doSearch($_POST);
        ?>
    </div>
    <footer>
        <div>
            <div><a href="AboutPage.html"><img src="/image/About.png" width="14" height="14" alt="(i)">About us</a></div>
        </div>
        <div><img src="image/LOGO_main(646*276).png" alt="RockatLogo" height="70" width="200"></div>
    </footer>
    </body>
</html>
