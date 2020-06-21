<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
            <h2 class="Heading">Join</h2>
            <p class="OrSf">Or <a class="OrSf2" href="LogInPage.php">Log In</a></p>
            <form action="/php/join.php" method="post">
                <div class="mainfieldElem mainfieldElem2">
                    <div>
                        <label for="username" class="Lable">Enter your email</label>
                        <div>
                            <input type="text" id="email" name="username" class="UsernameBar" value="">
                        </div>
                    </div>
                </div>
                <div class="mainfieldElem mainfieldElem2">
                    <div>
                        <label for="username" class="Lable">Pick a username</label>
                        <div>
                            <input type="text" id="username" name="username" class="UsernameBar" value="">
                        </div>
                    </div>
                </div>
                <div class="mainfieldElem mainfieldElem3">
                    <div>
                        <label for="password" class="Lable">Choose your password</label>
                        <div>
                            <input type="password" id="password" name="password" class="PasswordBar" 
                                   value="" spellcheck="true">
                        </div>
                    </div>
                </div>
                <div class="mainfieldElem mainfieldElem3">
                    <div>
                        <label for="password2" class="Lable">Confirm password</label>
                        <div>
                            <input type="password" id="password2" name="password2" class="PasswordBar" 
                                   value="" spellcheck="true">
                        </div>
                    </div>
                </div>
                <div class="mainfieldElem mainfieldElem4"><div>
                        <input id="submit" name="gojoin" class="SubmitButton" type="submit" value="Join">
                        </div>
                    </div>
            </form>
            <a accesskey="s" href="SA1.html"></a>
        </div>
    </body>
</html>
