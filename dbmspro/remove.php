<?php
include ('card.php');
if(isset($_GET["action"]))  
            {  
                 if($_GET["action"] == "rem")  
                 {
                    mysqli_query($conn, "DELETE FROM booking WHERE bid = '$desc'");
                echo
                "<script> alert('Removed From Cart'); </script>";
                 }
            }
?>