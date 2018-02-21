<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php 

include("mysql.php");
if(isset($_GET['login']))
{
$result1 = mysql_query("SELECT * FROM admintbl WHERE adminname='$_GET[uname]' AND adminpassword='$_GET[password]'  ");
$match=mysql_num_rows($result1);
if($match==0){
$result = mysql_query("SELECT * FROM usertbl WHERE username='$_GET[uname]' AND password='$_GET[password]'  ");
$match=mysql_num_rows($result);
}
if($match==0)
{
		header("location:welcome.php?pag=invalidadmin");
		}

if(mysql_num_rows($result)!=0)
	
	{
		$fetch=mysql_fetch_row($result);
	
	$_SESSION['uid']=$fetch[0];
	$_SESSION['username']=$fetch[1];
	
				header("location:user_account.php");
			}
if(mysql_num_rows($result1)!=0)
	{
		header("location:admin_home.php");
	}
}


?>
    



						
						 <form method="get" action="#">
					<table width="500"  align="center">
					<tr>
					  <th width="175">&nbsp;</th>
					</tr>
					<tr></tr>
  <tr>
    <td height="41">User Name</td>
    <td width="313"><input name="uname" type="text" id="uname" required="required"/></td>
  </tr>
  <tr>
    <td height="50">Password</td>
    <td><input name="password" type="password" id="password" required="required"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="login" id="login" class="button" value="Login" /></td>
  </tr>
</table> </form>


</body>
</html>
