<?php

include("connectionConfig.php");

$sql = "UPDATE clients set Last_Name='Jamal' WHERE id=3";
mysqli_query($conn, $sql);

?>