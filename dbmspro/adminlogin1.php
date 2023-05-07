<?php  
include ('adminlogin.php')


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminLogin</title>
</head>
<body>
    <form class="" action="" method="post" autocomplete="off">
        <div class="aoutside">
        <div class="signupp">
        <img class="signuppic" src="./pani.jpg"/>
        <div class="signupbox">
        <div class="signupbox">
        <div ><input class="signupinput" type="text" name="aid" placeholder="Admin ID"  /></div>
        <div ><input class="signupinput" type="password" name="password" placeholder="password"  /></div>
        <div ><button class="signupbtn" type="submit" name="submit" >Login</button></div>
        <div class="signuptxt">Go To User Login  <a href ="./login1.php">User login</a></div>
        </div>
        </div>
        </div>
    </form>
    
</body>
</html>

