<?php
session_start();
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  else
  {
 // echo "database connected";
  }

//Select database
mysql_select_db("my project", $con);

?>
