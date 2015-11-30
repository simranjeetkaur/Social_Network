<?php // Example 21-5: signup.php
ob_start();
include('header.php');
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<script>
function reg()
{
		ml = document.registration.email.value;
		pos1 = ml.indexOf("@")
		pos = ml.indexOf(" ")
		pos2 = (pos1+1)
		server = ml.substring(pos2);
		server_pos = server.lastIndexOf(".")
		reqtype = server.substring(server_pos+1)
		type_end = reqtype.substring(reqtype.length-1)
	
	if(document.registration.user.value=="")
	{
		alert("Please enter a user id");
		document.registration.user.focus();
		document.registration.user.select();
		return false;
	}	
	else if(document.registration.fname.value=="")
	{
		alert("Please enter first name");
		document.registration.fname.focus();
		document.registration.fname.select();
		return false;
	}
	else if(document.registration.lname.value=="")
	{
		alert("Please enter last name");
		document.registration.lname.focus();
		document.registration.lname.select();
		return false;
	}
	
	else if(ml == "")
	{
		document.registration.email.focus();
		document.registration.email.select();
		alert("Email cannot be blank");
		return false;                
	}


		else if(ml.indexOf("@")==-1)
		{
			document.registration.email.focus();
			document.registration.email.select();
			alert("The Email Address must contain '@' sign");
			return false;  
		}
		else if(pos1<1)
		{
			document.registration.email.focus();
			document.registration.email.select();
			alert("Email address cannot start with '@' sign");
			return false;  
		}  
		else if(ml.indexOf(".")==-1)
		{
			document.registration.email.focus();
			document.registration.email.select();
			alert("The Email Address must contain '.' sign");
			return false;  
		}
		else if(pos!=-1)
		{
			document.registration.email.focus();
			document.registration.email.select();
			alert("The Email Address cannot contain spaces");
			return false;  
		}
		else if(server.indexOf("@")!=-1)
		{
			document.registration.email.focus();
			document.registration.email.select();
			alert("A valid Email must contain only one '@' sign");
			return false;  
		} 
		else if(server.indexOf(".")==0)
		{
			document.registration.email.focus();
			document.registration.email.select();
			alert("There should some text between '@' and '.' sign");
			return false;  
		} 
		else if(reqtype=="")
		{  
			document.registration.email.focus();
			document.registration.email.select();
			alert("Email Id should end with character(like .com,.net,.org)");
			return false;  
		}
		else if(type_end.toUpperCase()<"A" || type_end.toUpperCase()>"Z")
		{
			document.registration.email.focus();
			document.registration.email.select();
			alert("Email Id should not end with number or symbol");
			return false;  
		}
		
	else if(document.registration.pass.value=="")
	{
		alert("Please enter password");
		document.registration.pass.focus();
		document.registration.pass.select();
		return false;
	}
	else if(document.registration.pass.value.length<8)
	{
		alert("The minimum length of the password is 8 characters...");
		document.registration.pass.focus();
		document.registration.pass.select();
		return false;
	}
	else if(document.registration.pass.value != document.registration.cpass.value)
    {
		alert("Password and confirm password is not matching");
		document.registration.cpass.value="";
		document.registration.cpass.focus();
		document.registration.pass.select();
    	return false;
	}
	else if(document.registration.Date.value=="DD")
		{
			alert("Please select Date");
		document.registration.Date.focus();
		return false;
		}
		else if(document.registration.month.value=="Month")
		{
			alert("Please select Month");
		document.registration.month.focus();
		return false;
		}
		else if(document.registration.Year.value=="Year")
		{
			alert("Please select Year");
		document.registration.Year.focus();
		return false;
		}
	else
		{
		return true;
		}	
}

//username check

	
</script>


</head>

<body background="green.jpg">

<div align="center">
<img src="images/rgnw.jpg" alt="register here" width="204" height="50" align="center"></div>

<table width="65%" height="258" align="center">
<br>
<table width="300" border="1" cellpadding="4" cellspacing="0" align="center" bgcolor="#FFFFFF" class="table">
<form id="registration" name="registration" method="post" action="signup.php" onSubmit="return reg();">
    <tr>
      <td width="83">User ID</td>
      <td width="197"><input name="user" type="text" id="enroll" value="" size="20" class="enroll" autocomplete="off" maxlength="11" /></td>
    </tr>
    <tr>
      <td>First Name</td>
      <td><input name="fname" type="text" id="fname" value="" size="20" /></td>
    </tr>
    
    <tr>
      <td>Last Name</td>
      <td><input name="lname" type="text" id="lname" value="" size="20" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input name="email" type="text" id="email" value="" size="20" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input name="pass" type="Password" id="pass" size="20" /></td>
    </tr>
    <tr>
      <td>Confirm</td>
      <td><input name="cpass" type="Password" id="cpass" size="20" /></td>
    </tr>
    <tr>
      <td>I am</td>
      <td><label>
        <input name="gen" type="radio"  value="Male" checked="checked" />
        Male</label>
        <label>
        <input type="radio" name="gen"  value="Female" />
        Female</label>
        </td>
    </tr>
    <tr>
      <td height="48" colspan="2">DOB&nbsp;&nbsp;&nbsp;
        <select name="Date" >
          <option>DD</option>
          <?php
for($i=1; $i<= 31; $i++)
{
echo "<option value='$i'>$i</option>";
}
?>
        </select>
        <select name="month">
          <option>Month</option>
          <option value="01">Jan</option>
          <option value="02">Feb</option>
          <option value="03">Mar</option>
          <option value="04">Apr</option>
          <option value="05">May</option>
          <option value="06">Jun</option>
          <option value="07">Jul</option>
          <option value="08">Aug</option>
          <option value="09">Sep</option>
          <option value="10">Oct</option>
          <option value="11">Nov</option>
          <option value="12">Dec</option>
        </select>
        <select name="Year">
          <option value="Year">Year</option>
          <?php
for($i=1975; $i< 2013; $i++)
{
echo "<option value='$i'>$i</option>";
}
?>
        </select>
        </td>
    </tr>
    <tr><td colspan="2" align="center"><input type="submit" name="submit" value="Register" /></form></td></tr></table>
</table>
</table>

<?php

include('connection.php');

if(isset($_POST["submit"]))
{
$datee="$_POST[Year]-$_POST[month]-$_POST[Date]";
$sql="INSERT INTO members (user,firstname,lastname,email,password,confirmpassword,iam,dob)
VALUES
('$_POST[user]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[pass]','$_POST[cpass]','$_POST[gen]','$datee')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
$_SESSION["user"] =  "User Registered Successfully...";

echo "User Registered Succesfully <a href='login.php'>Click Here to go back to login screen... </a>";
  }
}
?>


</body></html>
