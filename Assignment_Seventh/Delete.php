<?php

include("connectionConfig.php");

$sql = "DELETE FROM clients WHERE id=2";
mysqli_query($conn, $sql);
        
?>