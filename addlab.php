<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php 

include("mysql.php");
if(isset($_GET['addlab']))
{
$result = mysql_query("insert into labtbl values ('','$_GET[lno]','$_GET[lname]')");
if($result==1)
{
$labid=mysql_query("select max(labid) from labtbl");
$userid=mysql_fetch_row($labid);
$_SESSION['labid']=$userid[0];
$_SESSION['labno']=$_GET['lno'];
header("location:labmanagement.php");
}
}
?>



           <form method="get" action="#">
					<table width="500" cellpadding="5" cellspacing="5" align="center">
					  <th>Create New Lab </th>


 <tr>
    <td>Lab Number </td>
    <td><input name="lno" type="text" id="lno" required/></td>
  </tr>
  
  <tr>
    <td>Lab Name</td>
    <td><input name="lname" type="text" id="lname" required/></td>
  </tr>
  
  
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="addlab" id="addlab" class="button" value="Submit" />
	     <input type="submit" value="Cancel" />
    </td>
  </tr>
   
   
</table> </form>



</body>
</html>
