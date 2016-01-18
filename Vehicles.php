<?php
?>
<html>
  <head>
<title>Car Company</title>

</head>
<body>

<p id="header"><img alt="" class="as_right" src="main_logo.png" style="height: 160px; width: 300px;"></p>
<h1 id="header">Luxury Performance Cars</h1>

<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="Vehicles.php">Vehicles</a></li>
  <li><a href="Contact.php">Contact Us</a></li>
  <li><a href="About.php">About Us</a></li>
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
<p id="body">
<label> Please select the Make of the Vehicle you are interested in: </label>
<select id="slctMake"></select>
<br/>
<label> Please select the Model you like: </label>
<select id="slctModel"></select>
<br/>
<label> Based on the Make and Model you have chosen <br/> these are the years, color, and price that we have in stock: <br/> Year:</label>
<select id="slctYear"></select>
<label> Color: </label>
<select id="slctColor"></select>
<label> Price: </label>
<select id="slctPrice"></select>
<script src="scripts/jquery-1.11.3.min.js"></script>
<script src="scripts/script.js"></script>
</p>
<br/>
<div id="body"
<h3>Would you like to purchase this beautiful vehicle?</h3>
<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Select...</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="yes.php">Yes</a>
    <a href="no.php">No</a>
  </div>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
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
 
?>
<?php
require_once "instructions.css"
?>

</body>
</html>