<!DOCTYPE html>
<html>
    <?php include_once 'settings.php';
    $CONNECTASUSER = mysqli_connect(HOST, USER, UPASS, DB)?>
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
                <div class="search">Search</div>
                <div class="_2HOTE">
                    <a class="join" href="JoinPage.php">Join</a>
                    <a class="logIn" href="LogInPage.php">Log In</a></div>
                    <div class="HSpace"></div>
            </div>
        </nav>
    </header>
    <ul class="Typebar">
        <li class="TLElem"><a class="MHYQB" href="index.php"><span class="_2_hKv">Popular</span></a></li>
        <li class="TLElem selectedTypebar"><a class="MHYQB" href="TopPage.php"><span class="_2_hKv">Topics</span></a></li>
    </ul>
    <div class="mainbody">
        <?
        
        ?>
    </div>
    <footer>
    <a accesskey="s" href="SA1.html"></a>
        <div>
            <div><a href="AboutPage.html"><img src="About.png" width="14" height="14">About us</a></div>
        </div>
        <div><img src="image/LOGO_main(646*276).png" alt="RockatLogo" height="70" width="200"></div>
    </footer>
</body>
</html>