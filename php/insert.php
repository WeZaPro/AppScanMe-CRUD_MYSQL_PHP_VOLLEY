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


    
     $name = $_POST["name"];
     $email = $_POST["email"];
     $contact = $_POST["contact"];
     $address = $_POST["address"];
     
     $sql = "INSERT INTO tbl_users(name,email,contact,address) VALUES ('$name','$email','$contact','$address')";
     
     $result = mysqli_query($con,$sql);
     
     if($result){
         echo "Data Inserted";
        
     }
     else{
         echo "Failed";
     }
     mysqli_close($con);
     
          
    
    


?>