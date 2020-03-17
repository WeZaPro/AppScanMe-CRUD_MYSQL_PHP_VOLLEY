<?php

    $connection = mysqli_connect("localhost","root","","test_crud");
    
     $id = $_POST["id"];
     
     $sql = "DELETE FROM tbl_users WHERE id='$id'";
     
     $result = mysqli_query($connection,$sql);
     
     if($result){
         echo "Data Deleted";
        
     }
     else{
         echo "Failed";
     }
     mysqli_close($connection);
     


?>