<?php 

    $conn = mysqli_connect("database-1.cbqyrdstdpit.us-east-1.rds.amazonaws.com","admin","Admin123","Demodb");

        if(!$conn){
            echo "Not Connect";
        }
        else{
            echo "connect";
        }
?>