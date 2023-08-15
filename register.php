<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
</head>
<body >
<div class="center_content">

<!-- <html> -->
<title>Registration Form</title>
<form action="newuser.php" method="post" name="reg" onsubmit=" return validate_form(this)">
<style type="text/css">
.tab
{
color:#003366
font-size:12px;
font-family:"Tahoma";
}
h2
{
color:#993300;
font-family:"Tahoma";
}
input,textarea,select
{
color:#333366;
font-family:"Tahoma";
font-size:12px;
}
.i
{
color:#990099;
font-family:"Tahoma";
font-size:12px;
}
.date
{
color:#333366;
}
.button
{
color:#669933;
}
.asterik
{
color:#FF0000;
}
</style>
<!-- <body> --><br>
<h2 align="center">REGISTRATION FORM</h2>
<hr color="#669933" size="3">

<script type="text/javascript">
	function str_check(e)
	{
		key=e.keyCode
		if(key>=65 && key<=90 || key>=97 && key<=122 || key==8 || key==32)
		{}
		else
			e.keyCode=0
	}
	function num_check(e)
	{
		key=e.keyCode
		if(key>=48 && key<=57 || key==8)
		{}
		else
			e.keyCode=0
	} 
	function numchar_check(e)
	{
		key=e.keyCode
		if(key>=65 && key<=90 || key>=97 && key<=122 || key>=48 && key<=57 || key==8 || key==32 || key==44)
		{}
		else
			e.keyCode=0
	} 
	function pass_check()
{

  str=reg.pass.value
  str1=reg.cpass.value
  if(str==str1)
  {
  }
  else
  {
    alert('Enter Same Password in Both Password Fields')
  }
  
}
function emailcheck(str)
{
   {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1)
		{
		   alert("Invalid E-mail ID")
		   reg.email.value=""
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr)
		{
		   alert("Invalid E-mail ID")
		   reg.email.value=""
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr)
		{
		    alert("Invalid E-mail ID")
			reg.email.value=""
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID")
			reg.email.value=""
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot)
		 {
		    alert("Invalid E-mail ID")
			reg.email.value=""
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1)
		 {
		    alert("Invalid E-mail ID")
			reg.email.value=""
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1)
		 {
		    alert("Invalid E-mail ID")
			reg.email.value=""
		    return false
		 }

 		 return true					
	}
}
function validate_required(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {
    alert(alerttxt);return false;
    }
  else
    {
    return true;
    }
  }
}

function validate_form(thisform)
{
with (thisform)
  {
  if (validate_required(name,"uname must be filled out!")==false)
{name.focus();return false;}

if (validate_required(city,"city must be filled out!")==false)
  {city.focus();return false;}

  if (validate_required(state,"state must be filled out!")==false)
{state.focus();return false;}


  if (validate_required(country,"country must be filled out!")==false)
{country.focus();return false;}
 
 if (validate_required(email,"Email must be filled out!")==false)
{email.focus();return false;}

if (validate_required(pass,"password must be filled out!")==false)
{pass.focus();return false;}

if (validate_required(cpass,"confirm password must be filled out!")==false)
{cpass.focus();return false;}

}
}
</script>

<br>
<table width="405" class="tab" align="center" border="0">
  <tr>
    <td width="135" height="31"><b>Name:</b></td>
    <td width="260"><b>
      <input type="text" name="name" size="30" onKeyPress="str_check(event)" tabindex="1"> <b class="asterik">*</b>
      &nbsp;</b></td>
  </tr>
 
  <tr>
    <td height="31"><b>City:</b></td>
    <td><b>
      <input type="text" name="city" onKeyPress="str_check(event)" tabindex="2"> <b class="asterik">*</b>
      &nbsp;</b></td>
  </tr>
  
  <tr>
    <td height="31"><b>State:</b></td>
    <td><b>
      <input type="text" name="state" onKeyPress="str_check(event)" tabindex="3"> <b class="asterik">*</b>
      &nbsp;</b></td>
  </tr>
  <tr>
    <td height="31"><b>Country:</b></td>
    <td><b>
      <input type="text" name="country" onKeyPress="str_check(event)" tabindex="4"> <b class="asterik">*</b>
      &nbsp;</b></td>
  </tr>
  <tr>
    <td height="31"><b>Gender:</b></td>
    <td><b class="i">
      <input type="radio" name="gender" value="Male" tabindex="5">
      Male
      <input type="radio" name="gender" value="Female" tabindex="6">
      Female</b> <b class="asterik">*</b></td>
  </tr>
  <tr>
    <td height="31"><b>Date Of Birth:</b></td>
    <td height="28"><b>
      <select name="month">
        <option value="January">January
        <option value="February">February
        <option value="March">March
        <option value="April">April
        <option value="May">May
        <option value="June">June
        <option value="July">July
        <option value="August">August
        <option value="September">September
        <option value="October">October
        <option value="November">November
        <option value="December">December
      </select>
      <b class="i">-</b>
      <select name="day">
        <?php
			for($i=1;$i<=31;$i++)
			{
				echo "<option value=$i>$i";
			}
		?>
      </select>
      <b class="i">-</b>
      <input type="text" name="year" size="4" maxlength="4" onKeyPress="num_check(event)" tabindex="7"> <b class="asterik">*</b>
    </b></td>
  </tr>
  <td>&nbsp;</td>
      <td><b class="date">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Month&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b class="date"> -</b>&nbsp;&nbsp;&nbsp;Day&nbsp;&nbsp;&nbsp;<b class="date">-</b>&nbsp;&nbsp;&nbsp;&nbsp;Year</b></td>
  </tr> 
  <tr>
    <td height="31"><b>E-mail ID:</b>&nbsp;</td>
    <td><b>
      <input type="text" name="email" size="35" onBlur="emailcheck(this.value)" tabindex="8"> <b class="asterik">*</b>
    </b> </td>
  </tr>
  <tr>
    <td height="31"><b>Password:</b>&nbsp;</td>
    <td><b>
      <input type="password" name="pass" size="35" tabindex="10" tabindex="9"> <b class="asterik">*</b>
    </b> </td>
  </tr>
  <tr>
    <td height="31"><b>Confirm Password:</b>&nbsp;</td>
    <td><b>
      <input type="password" name="cpass" size="35" onBlur="pass_check()" tabindex="10"> <b class="asterik">*</b>
    </b> </td>
  </tr>
  <tr align="center">
    <td height="31" colspan="2"><b> <input class="button" type="submit" name="submit" value="&nbsp;&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;&nbsp;" style="background:url(images/loginbutton.jpg) center top" tabindex="11"> &nbsp; &nbsp; <input class="button" type="reset" value="&nbsp;&nbsp;&nbsp;&nbsp;Clear&nbsp;&nbsp;&nbsp;&nbsp;"style="background:url(images/loginbutton.jpg) center top" tabindex="12"></b>&nbsp;</td>
  </tr>
</table>
<b class="asterik" style="font-family:Tahoma" style="font-size:14px">* Mandatory fields.</b></br>
<b class="asterik" style="font-family:Tahoma" style="font-size:14px">Testing for Git commit.</b>
<!-- </body> -->
</form>
<!-- </html> -->
</div>
</body>
</html>
