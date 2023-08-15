<?php
session_start();
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
	<script type="text/javascript" src="js/boxOver.js"></script>
</head>
<body>
 
<div class="center_content">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<font face="Monotype Corsiva" size="+5" color="#996633"> Login</font> 
  
<form  action="login.php" name="form" method="post">
	<table border='1'>
	<tr>
		<td><font face="Georgia" color="#996633" size="+1">User Name</font></td>
		<td><input type="text" name="name" ></td>
	</tr>
	<tr>
		<td><font face="Georgia" color="#996633" size="+1">Password</font></td>
		<td><input type="password" name="pass"></td>
	</tr>
	<tr>
		<td height="31"><input type="submit" name="submit" value="Login"></td>
		<td><a href="register.php"><font face="Georgia" color="#0066CC" size="+1" >New User</font></a></td>
	</tr>
	<tr>
		<td ></td> 
	</tr>
	</table>

<?php
$error='';
if(isset($_GET['logoff']))
{
	$_SESSION=array();

if(isset($_COOKIE[session_name()]))
{
	setcookie(session_name(),'',time()-1000,'/');
}
session_destroy();
}

elseif (isset($_SESSION['valid']))
{
	header('Location:login.php');
exit();
}

elseif(isset($_POST['name']) && isset($_POST['pass']))
{

	$db=mysqli_connect("localhost","root","");
	mysqli_select_db($db,"sports");
	$a=$_POST['name'];
	$b=$_POST['pass'];
	$sql="select * from login where name='$a' and pass='$b'";
	$result=mysqli_query($db,$sql);
	$res=mysqli_fetch_array($result);
	if($res[0]==$_POST['name'] && $res[1]==$_POST['pass'])
	{
		$_SESSION['valid']=1;
		$_SESSION['user']=$_POST['name'];
?>
<Script Language="JAVASCRIPT">
	window.alert("login successful");
</Script>
<?php
exit();
}
else
{
	echo "user name or password wrong";
}
}
?>
</form>
</div>
</div>  
</body>
</html>
