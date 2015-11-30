<?php
include('functions.php');
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
