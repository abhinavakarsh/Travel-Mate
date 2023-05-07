<?php
require 'config.php';
if(isset($_POST["submit"])){
$username = $_POST["username"];
$password =$_POST["password"];
$result = mysqli_query($conn, "SELECT * FROM customer WHERE username = '$username' ");
$row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result)>0){
    if($password==$row["password"]){
                    
      $_SESSION["login"] = true;
      $_SESSION["username"] = $row["username"];
      $_SESSION["firstname"] = $row["firstname"];
      $_SESSION["phno"] = $row["phno"];
      
       header ("Location: index.php");
    }
     else{
      echo
       "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}


?>

