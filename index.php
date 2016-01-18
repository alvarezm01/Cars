<html>

<title>Car Company</title>
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
<div id="header">
<script type="text/javascript">
  var image1=new Image()
  image1.src="images/Audi.jpg"
  var image2=new Image()
  image2.src="images/BMW.jpg"
  var image3=new Image()
  image3.src="images/jaguar.jpg"
  var image4=new Image()
  image4.src="images/mercedes.jpg"
  var image5=new Image()
  image5.src="images/Porsche.jpg"
  </script>
<img src="images/Audi.jpg" name="slide" width="700" height="400">
<script type="text/javascript">
  var step=1
  function slideit() {
    document.images.slide.src=eval("image"+step+".src")
    if (step < 5)
    step++
    else
    step=1
    setTimeout("slideit()",2000)
    }
    slideit()
</script>
</div>
<h2 id="body"> Our Newest inventory for the year are: Jaguars and Mercedes-Benz </h2>
<div id="body">
<a href="jaguar.php"> <img src="images/f_type.png" width="200" height="100"> </a>
<a href="Mercedes.php"><img src="images/300_benz.jpg" width="200" height="100"> </a>
</div>
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

<?php
require_once "connect.php";
require_once "instructions.css";
?>
</html>