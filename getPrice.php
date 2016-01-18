<?php
if(isset($_GET["Year"]))
{
require "connect.php";
$Year=$_GET["Year"];
$Model=$_GET["Model"];

$query = "SELECT DISTINCT Price FROM cars WHERE Year = '$Year' AND Model = '$Model'";
$data=mysqli_query($con, $query);

$price=array();

while ($row=mysqli_fetch_array($data))
{
    array_push($price, $row["Price"]);
    
    }
    
    echo json_encode($price);
}
?>