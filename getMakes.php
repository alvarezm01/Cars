<?php
require "connect.php";
$query = "SELECT DISTINCT Make FROM cars";
$data=mysqli_query($con, $query);

$makes=array();

while ($row=mysqli_fetch_array($data))
{
    array_push($makes, $row["Make"]);
    }
    
    echo json_encode($makes);
    require "closedb.php";
?>