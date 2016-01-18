<?php
require_once "instructions.css";
require_once "connect.php";
function display() {
  global $con;
  ?>
  <script>
  function doremove(id) {
    location.href="index.php?task=remove&id="+id;
  }
  </script>
  <?php
  
  
  $sql = "SELECT ID, Make, Model FROM cars";
  $rs = mysqli_query($con, $sql);
  while ($row = mysqli_fetch_assoc($rs)) {
    $make= $row["Make"];
    $model=$row["Model"];
    $id=$row["ID"];
    echo "<button type='button' onclick='doremove($id)'>X</button>";
    echo "Make $make Model $model <br>";
  }
  echo "<form action='index.php?task=add' method='POST'>";
  echo "<input type='text' name='make'>";
  echo "<input type='text' name='model'>";
  echo "<input type='submit'>";
  echo "</form>";
}
if (isset($_GET["task"])) {
  $task = $_GET["task"]; 
} else {
  $task = "";  
}
if ($task=="Hello") {
  echo "Hello";
}
elseif ($task=="display") {
  display();
}
elseif ($task == "add") {
  $make = $_POST["make"];
  $model = $_POST["model"];
  $sql = "INSERT INTO cars (Make, Model) VALUES('$make', '$model')";
  mysqli_query($con, $sql);
  display();
}
elseif ($task=="remove") {
  $id=$_GET["id"];
  echo $id;
}
else {
  echo "GOODBYE";
}
?>