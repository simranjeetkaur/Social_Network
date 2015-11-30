<html>
<head>
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body background="green.jpg">

<?php // Example 21-7: login.php
include_once 'header.php';
echo "<div class='main'><h3>Please enter your details to log in</h3>";
$error = $user = $pass = "";

if (isset($_POST['user']))
{
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);
    
    if ($user == "" || $pass == "")
    {
        $error = "Not all fields were entered<br />";
    }
    else
    {
        $query = "SELECT user,password FROM members
            WHERE user='$user' AND password='$pass'";

        if (mysql_num_rows(queryMysql($query)) == 0)
        {
            $error = "<span class='error'>Username/Password
                      invalid</span><br /><br />";
        }
        else
        {
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            die("You are now logged in. Please <a href='members.php?view=$user'>" .
                "click here</a> to continue.<br /><br />");
        }
    }
}

echo <<<_END
<table width="65%" height="258" align="center">
<br>
<table width="300" border="1" cellpadding="4" cellspacing="0" align="center" bgcolor="#FFFFFF" class="table">
<form method='post' action='login.php'>$error
<tr>
<td>
<span class='fieldname'>Username</span></td>
<td><input type='text' maxlength='16' name='user' value='$user' /><br /></td>
</tr>
<tr>
<td>
<span class='fieldname'>Password</span>
</td>
<td><input type='password' maxlength='16' name='pass' value='$pass' /></td>
_END;
?>
</tr>
<tr>
<td><br />
<span class='fieldname'>&nbsp;</span></td>
<td><input type='submit' value='Login' />
</form><br /></td>
</table>

</div>
</body>
</html>
