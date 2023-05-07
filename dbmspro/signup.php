<?php
require 'config.php';
if(isset($_POST["submit"])){
$username = $_POST["username"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$dob = $_POST["dob"];
$phno = $_POST["phno"];
$phlen = strlen($phno);
$password = $_POST["password"];
$today = date("d-m-Y");
$age = floor((strtotime($today) - strtotime($dob)) / 31556926);
$duplicate = mysqli_query($conn, "SELECT * FROM customer WHERE username = '$username'");
function checkPhoneNumberLength($phoneNumber) {
    if (strlen($phoneNumber) !== 10) {
        echo "<script> alert('phone number must be atleast 10 digits'); </script>";
        echo '<script>window.location="signup.php"</script>';
        return false;
    }
    return true;
}
assert(checkPhoneNumberLength($phno),"");
if(mysqli_num_rows($duplicate) > 0) {
echo
"<script> alert('Username Has Already Taken'); </script>";
}

else{
//if($password = $confirmpassword) {
$query = "INSERT INTO `customer` (`username`, `firstname`, `lastname`, `dob`, `phno`, `password`) VALUES ('$username', '$firstname', '$lastname', '$dob', '$phno', '$password')";
mysqli_query($conn, $query);
echo
"<script> alert('Registration Successful'); </script>";
}
/*else{
echo
"<script> alert('Password DS'); </script>";
}*/
}
//}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <form class="" action="" method="post" autocomplete="off" >
        <div class="soutside">
        <div class="signupp">
        <img class="signuppic" src="./gulambi.png"/>
        <div class="signupbox">
        <div ><input class="signupinput" type="text" name="username" placeholder="username" required value="" /></div>
        <div ><input class="signupinput" type="text" name="firstname" placeholder="firstname" required value="" /></div>
        <div ><input class="signupinput" type="text" name="lastname" placeholder="lastname" required value="" /></div>
        <div ><input class="signupinput" type="date" name="dob" placeholder="DOB" /></div>
        <div ><input class="signupinput" type="text" name="phno" placeholder="phno" required value="" /></div>
        <div ><input class="signupinput" type="password" name="password" placeholder="password" required value="" /></div>
        <div ><button class="signupbtn" type="submit" name="submit"  >register</button></div>
        <div class="signuptxt1">have an account <a href ="./login1.php">sign in</a></div>
        </div>
        </div>
        </div>
        </form>
</body>
</html>