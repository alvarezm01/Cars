<?php
if(isset($_GET["Model"]))
{
require "connect.php";
$model=$_GET["Model"];

$query = "SELECT DISTINCT Color_type FROM cars WHERE Model LIKE '$model'";
$data=mysqli_query($con, $query);

$colorData=array();

while ($row=mysqli_fetch_array($data))
{
    array_push($colorData, $row["Color_type"]);
    
    }
    
    echo json_encode($colorData);
}
?>