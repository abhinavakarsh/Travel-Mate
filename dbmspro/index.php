<?php include ('login.php');
$name=$_SESSION["username"];
$phn=$_SESSION["phno"];

$data5 = mysqli_query($conn, "SELECT * FROM booking WHERE username = '$name'");
    //$data = mysqli_fetch_assoc($data1);
    $count=mysqli_num_rows($data5);
    if($count<=7){
        if(isset($_POST["submitfeed"])){
            $feedback = $_POST["feedback"];
            $rating = $_POST["rating"];
            $query = "INSERT INTO `feedback` (`username`,`feedback`, `rating`, `phno`) VALUES ('$name','$feedback','$rating','$phn')";
        mysqli_query($conn, $query);
        echo
        "<script> alert('Thank You For Your Feedback'); </script>";
        echo '<script>window.location="card.php"</script>';
        }
        if(isset($_POST["cart1"])){
            $query = "INSERT INTO `booking` (`bid`,`username`, `pid`, `package`,`cost`, `phno`,`pic`) VALUES ('','$name','pac01','New zeland','200000','$phn','auckland.jpeg')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Added To Cart'); </script>";
        }
        if(isset($_POST["cart2"])){
            $query = "INSERT INTO `booking` (`bid`,`username`, `pid`, `package`,`cost`, `phno`,`pic`) VALUES ('','$name','pac02','Japan','300000','$phn','japan.jpg')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Added To Cart'); </script>";
        }
        if(isset($_POST["cart3"])){
            $query = "INSERT INTO `booking` (`bid`,`username`, `pid`, `package`,`cost`, `phno`,`pic`) VALUES ('','$name','pac03','Switzerland','300000','$phn','switzerland.jpg')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Added To Cart'); </script>";
        }
        if(isset($_POST["cart4"])){
            $query = "INSERT INTO `booking` (`bid`,`username`, `pid`, `package`,`cost`, `phno`,`pic`) VALUES ('','$name','pac04','Barcelona','300000','$phn','barcelona.jpg')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Added To Cart'); </script>";
        }
        if(isset($_POST["cart5"])){
            $query = "INSERT INTO `booking` (`bid`,`username`, `pid`, `package`,`cost`, `phno`,`pic`) VALUES ('','$name','pac05','Chicago','300000','$phn','chicago.jpg')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Added To Cart'); </script>";
        }
        if(isset($_POST["cart6"])){
            $query = "INSERT INTO `booking` (`bid`,`username`, `pid`, `package`,`cost`, `phno`,`pic`) VALUES ('','$name','pac06','Hawaii','300000','$phn','hawaii.jpg')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Added To Cart'); </script>";
        }
        if(isset($_POST["cart7"])){
            $query = "INSERT INTO `booking` (`bid`,`username`, `pid`, `package`,`cost`, `phno`,`pic`) VALUES ('','$name','pac07','Maldives','300000','$phn','maldives.jpg')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Added To Cart'); </script>";
        }
        if(isset($_POST["cart8"])){
            $query = "INSERT INTO `booking` (`bid`,`username`, `pid`, `package`,`cost`, `phno`,`pic`) VALUES ('','$name','pac08','Egypt','300000','$phn','egypt.jpg')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Added To Cart'); </script>";
            echo '<script>window.location="index.php"</script>';
        }
    }

else {
    echo
            "<script> alert('not allowed more than 2'); </script>";
}

















?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./pagstyle.css">
    <title>Index</title>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <img src="logo.svg" class="logo">
            <nav>
                <ul>
                    <li><a href="#"></a></li>
                    <li><a href="">WELCOME: <?php echo $_SESSION["username"];?></a></li>
                    <li><a href="./card.php">CART</a></li>
                    <li><a href="./logout.php">LOGOUT</a></li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="card box1">
                
                <p></p>
            </div>
            <div class="card box2">
            </div>
            <div class="card box3">
            </div>
            <div class="card box4">
            </div>
            <div class="name1">New zeland</div>
            <div class="name2">Japan</div>
            <div class="name3">Switzerland</div>
            <div class="name4">Barcelona</div>

            <form method="post">
            <div class="btnspace1"><button class="cart" name="cart1"><span>Add To Cart</span>
            <i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
            </div>
            </form>

            <form method="post">
            <div class="btnspace2"><button class="cart" name="cart2"><span>Add To Cart</span>
            <i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
            </div>
            </form>
            <form method="post">
            <div class="btnspace3"><button class="cart" name="cart3"><span>Add To Cart</span>
            <i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
            </div>
            </form>
            <form method="post">
            <div class="btnspace4"><button class="cart" name="cart4"><span>Add To Cart</span>
            <i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
            </div>
            </form>
        </div>
        <div class="row">
            <div class="card box5">

            </div>
            <div class="card box6">

            </div>

            <div class="card box7">

            </div>
            <div class="card box8">

            </div>
            <div class="name5">Chicago</div>
            <div class="name6">Hawaii</div>
            <div class="name7">Maldives</div>
            <div class="name8">Egypt</div>
            <form method="post">
            <div class="btnspace1"><button class="cart" name="cart5"><span>Add To Cart</span>
            <i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
            </div>
            </form>
            <form method="post">
            <div class="btnspace2"><button class="cart" name="cart6"><span>Add To Cart</span>
            <i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
            </div>
            </form>
            <form method="post">
            <div class="btnspace3"><button class="cart" name="cart7"><span>Add To Cart</span>
            <i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
            </div>
            </form>
            <form method="post">
            <div class="btnspace4"><button class="cart" name="cart8"><span>Add To Cart</span>
            <i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
            </div>
            </form>
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