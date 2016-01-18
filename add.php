<?php

function add(&$params)
{
    foreach ($params as &$var) {
        is_array($var)?add($var):$var=addslashes($var);
        }
}
add($_POST);
$make_id=$_POST['Make_id'];
$make=$_POST['Make'];
$model=$_POST['Model'];
$query="SELECT FROM cars WHERE Make_id = '$make_id'";
$sqlsearch=mysql_query($query);
$resultcount=mysql_numrows($sqlsearch);
if ($resultcount>0) {
    mysql_query("UPDATE cars SET Make='$make', Model='$Model' WHERE Make_id='$make_id'")
    or die(mysql_error());
    } else {
        mysql_query("INSERT INTO cars (Make_id, Make, Model) VALUES ('$make_id', '$make', '$model')")
        or die(mysql_error());
        }
             
     
?>
