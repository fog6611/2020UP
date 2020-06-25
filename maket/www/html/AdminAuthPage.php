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
        <div class="mainfieldElem" style="position: absolute; right: 20px; top: 20px">
            <div class="mainfieldElem">
                <a class="OrSf2" href="index.php">Back to Rockat Art</a>
            </div>
        </div>
        <div class="mainfield">
            <h2 class="Heading">Admin panel</h2>
            <form action="" method="post">
                <div class="mainfieldElem mainfieldElem2">
                    <div>
                        <label for="username" class="Lable">Login</label>
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
                        <input id="submit" class="SubmitButton" type="submit" value="GO IN">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>

