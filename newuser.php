<html>
<title>new user</title>
<body>
</body><font color="#003366" face="Tahoma" size="5px">

<?php
	$link = mysqli_connect('localhost','root','');
	$db = mysqli_select_db($link,'sports');
	
	$rname = ucwords($_POST['name']);
	$rcity = ucwords($_POST['city']);
	$rstate = ucwords($_POST['state']);
	$rcountry = ucwords($_POST['country']);
	$rgender = $_POST['gender'];
	$rpass = $_POST['pass'];
	$rcpass = $_POST['cpass'];
	$rmonth = $_POST['month'];
	$rday = $_POST['day'];
	$ryear = $_POST['year'];
	$rdob = $rmonth." - ".$rday." - ".$ryear;
	$remailid = $_POST['email'];
	if($rname==' ' and  $rcity==' ' and $rstate==' ' and  $rcountry==' ' and  $rgender==' 'and  $rmonth==' ' and $rday==' ' and $remailid==' ' and $rpass==' ' and $rcpass==' ')
	{
		echo "<br><br><br><center>Please fill each field of the form.<br>All fields are mandatory.</center>";
	}
	else
	{
		/*echo $rname;
		echo "<br>".$raddress;
		echo "<br>".$rcity;
		echo "<br>".$rpincode;
		echo "<br>".$rstate;
		echo "<br>".$rcountry;
		switch($rgender)
		{
			case 0:
		        echo "<br>Male";
				break;
			case 1:
				echo "<br>Female";
				break;
		}
		echo "<br>".$rmonth."/".$rday."/".$ryear;
		echo "<br>".$rage;
		echo "<br>".$rphone1." - ".$rphone2." - ".$rphoneno;
		echo "<br>".$rmobile1." - ".$rmobile2;
		echo "<br>".$remailid;
		echo "<br>".$rmarital;
		echo "<br>".$reducation;
		echo "<br>".$rvisatype;
		echo "<br>".$rexperience; */
		$sql = "insert into newuser values('".$rname."','".$remailid."','".$rgender."','".$rdob."','".$rcity."','".$rstate."','".$rcountry."','".$rpass."','".$rcpass."')";
		$ss=mysqli_query($link,"insert into login values('".$rname."','".$rpass."')");
		
		$result = mysqli_query($link,$sql);
		if(!$result)
			echo "<center><br><br><br>Sorry.....Your record cannot be added. Please try again.</center>";
		else
		{
			echo "<center><br><br><br>Record has been successfully added.</center>";
		}
	}
?>

</font>
</body>
</html>




