<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<h3>Semester3</h3>
<br>


<?php 

include("mysql.php");
if(isset($_GET['addsub']))
{
$result = mysql_query("insert into semester3subtbl values ('','$_GET[sno]','$_GET[sname]')");
if($result==1)
{
$sid=mysql_query("select max(sid) from semester3subtbl");
$subid=mysql_fetch_row($sid);
$_SESSION['sid']=$subid[0];
$_SESSION['subjectno']=$_GET['sno'];
header("location:add_subjects.php");
}
}
?>


<form method="get" action="#">
					<table width="500" cellpadding="5" cellspacing="5" align="center">
					<th>Add Subject of Semester3</th>
  <tr>
    <td>Subject Id</td>
    <td><input name="sno" type="text" id="sno" required/></td>
  </tr>
  <tr>
    <td>Subject Name</td>
    <td><input name="sname" type="text" id="sname" required/></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="addsub" id="addsub" class="button" value="Add" />
	
	<input type="submit" value="Cancel"/></td>
  </tr>
</table> </form>

</body>
</html>
