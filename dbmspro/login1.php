<?php include ('login.php')?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form class="" action="" method="post" autocomplete="off">
        <div class="outside">
        <div class="signupp">
        <img class="signuppic" src="per.jpg"/>
        <div class="signupbox">
        <div class="signupbox">
        <div ><input class="signupinput" type="text" name="username" placeholder="username"  /></div>
        <div ><input class="signupinput" type="password" name="password" placeholder="password"  /></div>
        <div ><button class="signupbtn" type="submit" name="submit" >Login</button></div>
        <div class="signuptxt">don't have an account <a href ="./signup.php">sign up</a></div>
        <div class="asignuptxt">Admins Sign In <a href ="./adminlogin1.php">here</a></div>
        </div>
        </div>
        </div>
    </form>
    
</body>
</html>