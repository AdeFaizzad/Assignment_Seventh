<?php

include("connectionConfig.php");

if(isset($_POST['sub'])){
    $userfName = $_POST["ufName"];
    $userlName = $_POST["ulName"];
    $sql = "INSERT INTO clients(First_Name, Last_Name)
    VALUES('$userfName','$userlName')";
    mysqli_query($conn, $sql);
    echo"one record has successfully inserted to table clients";    
        } 
        else{
            
            
            echo"not inserted";
        }
   
?>