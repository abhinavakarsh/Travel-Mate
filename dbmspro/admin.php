<?php  
include ('adminlogin.php');
if(isset($_GET["action"]))  
    {  
        if($_GET["action"] == "rem")  
        {
            if($remove=$_GET["id"]){
            mysqli_query($conn, "DELETE FROM booking WHERE pid = '$remove'");
        echo
            "<script> alert('Removed From Cart'); </script>";
        echo '<script>window.location="admin.php"</script>';
            }
        }
    }

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Mukta:wght@300;400;600;700;800&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./cart.css">
    <link rel="stylesheet" href= "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
<div class="container">
    <div class="navbar">
            <img src="logo.svg" class="logo" style="margin-right:650px">
            <nav>
                <ul>
                    <li><a href="">WELCOME:<?php echo $_SESSION["name"];?></a></li>
                    <li><a href="./logout.php">LOGOUT</a></li>
                </ul>
            </nav>
    </div>
    <table>
    <thead>
      <tr>
        <th>BID</th>
        <th>Username</th>
        <th>PID</th>
        <th>Package</th>
        <th>Phno</th>
        <th>Cost</th>
        <th width="20%">Remove</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $data1 = mysqli_query($conn, "SELECT * FROM booking");
    //$data = mysqli_fetch_assoc($data1);
    $count=mysqli_num_rows($data1);
    if( $count > 0) {
    while($data = mysqli_fetch_array($data1)){
    ?>
    <tr>
        <td><?php echo $data["bid"];?></td>
        <td><?php echo $data["username"];?></td>
        <td><?php echo $data["pid"];?></td>
        <td><?php echo $data["package"];?></td>
        <td><?php echo $data["phno"];?></td>
        <td class="amount"><?php echo $data["cost"];?></td>
        <td><form method="post"><img class="bin" style="margin-left:0px;" src="./remove.png"/><a class="removetxt" href="admin.php?action=rem&id=<?php echo $data["pid"];?>">Remove</a></input></form></td>
      </tr>
    <?php   
    }
    }
    ?>
      
    </tbody>
  </table>
</div>
</body>
</html>