<?php


$host = "localhost";
$db_user= "root";
$db_password = "";
$db_name = "test_crud";

$con = mysqli_connect($host,$db_user,$db_password,$db_name);
if($con)
    echo "Connection Success...";
else
    echo "Connect error....";
     
    $sql = "INSERT INTO tbl_users(name,email,contact,address) VALUES ('we','we@gmail','5555','6666')";
     
    $result = mysqli_query($con,$sql);
    
    if($result){
        echo "Data Inserted";
       
    }
    else{
        echo "Failed";
    }
    mysqli_close($con);

     
          
    
    


?>