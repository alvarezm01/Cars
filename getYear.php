<?php
if(isset($_GET["Model"]))
{
require "connect.php";
$model=$_GET["Model"];

$query = "SELECT Year FROM cars WHERE Model LIKE '$model'";
$data=mysqli_query($con, $query);

$year=array();

while ($row=mysqli_fetch_array($data))
{
    array_push($year, $row["Year"]);
    
    }
    
    echo json_encode($year);
}
?>