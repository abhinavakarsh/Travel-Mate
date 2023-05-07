<?php
require 'config.php';
if(isset($_POST["submit"])){
$aid = $_POST["aid"];
$password =$_POST["password"];
$result = mysqli_query($conn, "SELECT * FROM admin WHERE aid = '$aid' ");
$row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result)>0){
    if($password==$row["password"]){
                    
      $_SESSION["login"] = true;
      $_SESSION["name"] = $row["name"];
      
       header ("Location: admin.php");
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



