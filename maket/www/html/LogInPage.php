<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
        <link rel="stylesheet" href="css/JoinLogInPage.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="mainfield">
            <div class="cross">
                <a href="index.php"><img src="image/cross.png" alt="x" width="21" height="21" ></a>
            </div>
            <div class="mainfieldElem">
                <a href="index.php">
                    <img class="LOGO" src="image/LOGO_fff(646*216).png" alt="RockatLogo" width="300" height="100"></a></div>
            <h2 class="Heading">Log In</h2>
            <p class="OrSf">Or <a class="OrSf2" href="JoinPage.php">Join</a></p>
            <form action="/php/login.php" method="post">
                <div class="mainfieldElem mainfieldElem2">
                    <div>
                        <label for="username" class="Lable">Username</label>
                        <div class="UsernameBar">
                            <input type="text" id="username" name="username" class="UsernameBar" value="">
                        </div>
                    </div>
                </div>
                <div class="mainfieldElem mainfieldElem3">
                    <div>
                        <label for="password" class="Lable">Password</label>
                        <div class="PasswordBar">
                            <input type="password" id="password" name="password" class="PasswordBar" 
                                   value="" spellcheck="true">
                        </div>
                    </div>
                </div>
                    <div class="mainfieldElem mainfieldElem4"><div>
                            <input id="submit" class="SubmitButton" type="submit" value="Log In">
                        </div>
                    </div>
            </form>
        </div>
    </body>
</html>
