<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 

include("mysql.php");
if(isset($_GET['addfaculty']))
{
$result = mysql_query("insert into facultytbl values ('','$_GET[fname]','$_GET[fpost]','$_GET[facultyno]','$_GET[emailid]','$_GET[mobno]')");
if($result==1)
{
$uid=mysql_query("select max(fid) from usertbl");
$userid=mysql_fetch_row($uid);
$_SESSION['fid']=$userid[0];
$_SESSION['facultyname']=$_GET['fname'];
header("location:user_account.php");
}
}
?>


           <form method="get" action="#">
					<table width="500" cellpadding="5" cellspacing="5">
					<th>Create faculty Prifile</th>
  <tr>
    <td>faculty Name</td>
    <td><input name="fname" type="text" id="uname" required/></td>
  </tr>
  
  <tr>
   <td>designation</td>
   <td>
<select name="fpost">
<option value="HOD" selected>HOD</option>
<option value="Proffessor">Proffessor</option>
<option value="Ass.Proffessor">Ass.Proffessor</option>
<option value="Asso.Proffessor">Asso.Proffessor</option>
<option value="Ass.Teacher">Ass.teacher</option>
</select></td>
  </tr>
  
  <tr>
    <td>faculty no</td>
    <td><input name="facultyno" type="text" id="facid" required/></td>
  </tr>
 
  <tr>
    <td>Email Id</td>
    <td><input name="emailid" type="text" id="emailid" required/></td>
  </tr>

<tr>
    <td>mobile no</td>
    <td><input name="mobno" type="text" id="mobno" required/></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="addfaculty" id="addfaculty" class="button" value="submit" /></td>
  </tr>
</table> </form>

<h2>Categories</h2>
							<ul>
								<li><a href="admin_home.php">admin Home</a></li>
								
								
								
								<?php if(!isset($_SESSION['facultyname'])){?>
							    <li><a href="logout.php">Logout</a></li>
								<li><a href="addfaculty.php">New Faculty Registration</a></li>
								<?php } else{?>
								<li><a href="user_account.php">My Account</a></li>
								
								<?php }?>
								&nbsp;
								
							</ul>

</body>
</html>
