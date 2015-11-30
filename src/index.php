<html>
<head>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="css/header.css">

</head>
<body background="green.jpg">

<?php // Example 21-4: index.php
include_once 'header.php';

echo "<p align='center' class='p'><strong align='center'>Welcome to Campus World,";

if ($loggedin) echo " $user, you are logged in.";
else           echo ' please sign up and/or log in to join in.</strong></p>';

?>
<br/>
<br/>
<div align="center">
<img src="campus.jpg" width="800" height="640" class="img"></div>
</div>
</span><br /><br />
</body>
</html>  