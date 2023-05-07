<?php
include ('login.php');
$name=$_SESSION["username"];
$phn=$_SESSION["phno"];
  
if(isset($_POST["submitfeed"])){
    $feedback = $_POST["feedback"];
    $rating = $_POST["rating"];
    $query = "INSERT INTO `feedback` (`username`,`feedback`, `rating`, `phno`) VALUES ('$name','$feedback','$rating','$phn')";
mysqli_query($conn, $query);
echo
"<script> alert('Thank You For Your Feedback'); </script>";
echo '<script>window.location="card.php"</script>';
}
$data1 = mysqli_query($conn, "SELECT * FROM booking WHERE username = '$name'");
    //$data = mysqli_fetch_assoc($data1);
    $count=mysqli_num_rows($data1);
    if($count==0){
        echo
            "<script> alert('Cart Is Empty'); </script>";
        echo '<script>window.location="index.php"</script>';
    }
    if(isset($_GET["action"]))  
    {  
        if($_GET["action"] == "rem")  
        {
            if($remove=$_GET["id"]){
            mysqli_query($conn, "DELETE FROM booking WHERE bid = '$remove'");
        echo
            "<script> alert('Removed From Cart'); </script>";
        echo '<script>window.location="card.php"</script>';
            }
        }
    }
    if(isset($_GET["action"]))  
    {  
         if($_GET["action"] == "checkout")  
         {
            
        echo
        "<script> alert('Thank you! and Safe journey'); </script>";
        echo '<script>window.location="logout.php"</script>';
            
         }
    }  
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./cart.css">
    <link rel="stylesheet" href= "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>



<body>
<div class="container">
    <div class="navbar">
            <img src="logo.svg" class="logo">
            <nav>
                <ul>
                    <li><a href="">WELCOME: <?php echo $name;?></a></li>
                    <li><a href="./index.php">INDEX</a></li>
                    <li><a href="./card.php">CART</a></li>
                    <li><a href="./logout.php">LOGOUT</a></li>
                </ul>
            </nav>
    </div>
    <div class="allcontainer">
    <div class="ccontainer">
    <?php 
    
    if( $count > 0) {
    $total=0;
    while($data = mysqli_fetch_array($data1)){
    $desc=$data["pid"];
    $data2 = mysqli_query($conn, "SELECT * FROM package WHERE pid = '$desc'");
    $data3 = mysqli_fetch_array($data2);
    ?>
    
    <div class="card">
            <img class="photo" src="./<?php echo $data["pic"];?>" />
            <div class="box">
            
            <div class="title"><?php echo $data["package"];?></div>
            <div class="cost"><?php echo $data3["pdesc"];?></div>
            <div class="taste">
            <img class="map" src="./285659_marker_map_icon.png"/>
           
            <div class="remove"><div ><a class="google" href="<?php echo $data3["paddress"];?>">View on Google Maps</a></div><form method="post"><img class="bin" src="./remove.png"/><a class="removetxt" href="card.php?action=rem&id=<?php echo $data["bid"];?>">Remove</a></input></form></div>
            </div>
            <div class="content"></div>
        </div>
    </div>
    <hr class="line">
    
    <?php   
    $total=$total+$data["cost"];
    }
    }
    ?>
    </div>
    <div class="checkout">
    <div class="booking">Your Booking Details </div>
    <hr class="cline">
    <?php
    $data1 = mysqli_query($conn, "SELECT * FROM booking WHERE username = '$name'");
    //$data = mysqli_fetch_assoc($data1);
    $count=mysqli_num_rows($data1);
    if( $count > 0) {
    $total=0;
    while($data = mysqli_fetch_array($data1)){
    ?>
    <div class="checkcontent"><div class="checkpackage"><?php echo $data["package"];?></div><div class="checkcost"><?php echo $data["cost"];?></div></div>
    <?php   
    $total=$total+$data["cost"];
    }
    }
    ?>
    <hr class="cline">
    <div class="checktotal"><div class="subtotal">Subtotal</div><div class="total"><?php echo $total;?></div></div>
    <div class ="checkbtn"><img style="height:15px;width:10px;margin-right:10px" src="lock.png"/><a style="text-decoration-line:none;color:#ffffff" href="card.php?action=checkout">checkout</a></div>
    </div>
    </div>
    </div>
    <div class="footer">
        <div class="fcontent">Give Your Feedback</div>
        <form class="" method="post" action=""  autocomplete="off" >
        <textarea class="feedback"  name="feedback" placeholder="Type here..."></textarea>
        <div><label style="background-color:#ffffff;margin-left:700px" for="quantity">Ratings</label>
        <input type="number" name="rating" min="1" max="5" placeholder="1-5"></div> 
        <button class="fbutton" type="submit" name="submitfeed">Submit</button>
        </form>
        <div class="ftext">© 2023 Loopstudios, LLC</div>
        <hr class="fline">
        <div class="last"><img src="logo.svg" class="flogo">
        <div class="outer">
        <div class="ftxt">Terms</div>
        <div class="ftxt">Privacy</div>
        <div class="ftxt">Cookies</div>
        </div>
        <img src="linkedin.png" class="linkedin">
        <img src="facebook.png" class="facebook">
        <img src="instagram.png" class="instagram">
        <img src="youtbe.png" class="youtube">
        </div>
        
    </div>
    <div>
    <img src="trusted.png" class="partners">
    </div>
</body>
</html>


