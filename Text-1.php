<html>
<body>
  <div id="header">
<p><img alt="" class="as_right" src="main_logo.png" style="height: 160px; width: 300px;"></p>
<h1>Luxury Performance Cars</h1>
</div>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="Vehicles.php">Vehicles</a></li>
  <li><a href="Contact.php">Contact Us</a></li>
  <li><a href="About.php">About Us</a></li>
  <li><a href="text-1.php?task=display">Add/Remove Vehicle</a></li>
  <ul style="float:right;list-style-type:none;">
  <div id="searchwrap">
    <li id="search">
      <form id="search-form" name="search" action="search.php" method="get">
        <input id="search-input" name="search" type="text">
        </form>
      </li>
    </div>
  <p><button type="button" class="btn btn-info">
    <span class="glyphicon glyphicon-search"></span> Search
  </button>
</p>
  </ul>
  </ul>
<?php
require_once "connect.php";
function display() {
  global $con;
  ?>
  <script>
  function doremove(id) {
    location.href="text-1.php?task=remove&id="+id;
  }
  </script>
  <?php
  
  
  $sql = "SELECT id, Make_id, Make, Model, Year, Price FROM cars";
  $rs = mysqli_query($con, $sql);
  while ($row = mysqli_fetch_assoc($rs)) {
    $id=$row["id"];
    $make= $row["Make"];
    $model=$row["Model"];
    $year=$row["Year"];
    $price=$row["Price"];
    $make_id=$row["Make_id"];
    echo "<button type='button' onclick='doremove($id)'>X</button>";
    echo "Make_id: $make_id Make: $make Model: $model Year: $year Price: $$price<br>";
  }
     ?>
    <h3> Do you want to add a new vehicle? </h3>
    <?php
    echo "Make Id:" . str_repeat('&nbsp;', 30). "Make:" . str_repeat('&nbsp;', 34) . "Model:" . str_repeat('&nbsp;', 30) . "Year:" . str_repeat('&nbsp;', 34) . "Price:";
  echo "<form action='text-1.php?task=add' method='POST'>";
  echo "<input type='text' name='make_id'>" ;
  echo "<input type='text' name='make'>";
  echo "<input type='text' name='model'>";
  echo "<input type='text' name='year'>";
  echo "<input type='text' name='price'>";
  echo "<input type='submit'>";
  echo "</form>";
  ?>
    <br/>
    <br/>
  <?php
}
if (isset($_GET["task"])) {
  $task = $_GET["task"]; 
} else {
  $task = "";  
}

if ($task=="display") {
  display();
}
elseif ($task == "add") {
  $make_id=$_POST["make_id"];
  $make = $_POST["make"];
  $model = $_POST["model"];
  $year = $_POST["year"];
  $price = $_POST["price"];
  $sql = "INSERT INTO cars (Make_id, Make, Model, Year, Price) VALUES('$make_id', '$make', '$model', '$year', '$price')";
  mysqli_query($con, $sql);
  display();
}

elseif ($task == "remove") {
  $id=$_GET["id"];
  $sql="DELETE FROM cars WHERE id = '$id'";
  mysqli_query($con, $sql);
  display();

}
else {
  echo "GOODBYE";
}
?>
    <div class="pageContentWrapper">
        </div>
<P>
        <div class="footer">
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp
       &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
      <a href="index.php"><img src="home.png" style="height: 30px; width: 30px"></a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
      <a href="Contact.php"><img src="email_symbol.png" style="height: 30px; width: 30px"></a>
      <center> &#169 2016 CarCompany Luxury Cars. All Rights Reserved.</center> 
      <hr>
</P>
        
        </div>
</body>
</html>
<?php
include_once "instructions.css";
?>