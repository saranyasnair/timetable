



<?php 

include("mysql.php");

if(isset($_GET['submit'])){
	$result=mysql_query("update admintbl set adminpassword='$_GET[newpass]'  ");

if($result==0)
		header("location:login.php?pag=error");
else
		header("location:admin_home.php?pag=changepassword");
}
?>


<form method="get" action="">
							 
							 <table width="500" cellpadding="10" align="center"  >
							  <th>Change Your Password</th>
							
  <tr>
    <td>Current Password</td>
    <td><input name="oldpass" type="text" id="oldpass" /></td>
  </tr>
   <tr>
    <td>New Password</td>
    <td><input name="newpass" type="text" id="newpass" /></td>
  </tr>
  
 
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" id="submit" class="button" value="Change" /></td>
  </tr></table>
							
							
							
                          
							
                     </form>
					 
					 
					 <ul>
								<li><a href="index.php">Home</a></li>
								
								
								<?php if(!isset($_SESSION['username'])){?>
								<li><a href="login.php">Login</a></li>
								
								<?php } else{?>
								<li><a href='user_account.php'>My Account</a></li>
								
								<li><a href="logout.php">Logout</a></li>
								<?php }?>
								&nbsp;
								
							</ul>

</body>
</html>
