<?php
if(count($_POST)>0) {
	require_once("db.php");
	$sql = "INSERT INTO users (username, password, firstname, lastname) VALUES ('" . $_POST["username"] . "','" . $_POST["password"] . "','" . $_POST["firstname"] . "','" . $_POST["lastname"] . "')";
	mysqli_query($conn,$sql);
	$current_id = mysqli_insert_id($conn);
	if(!empty($current_id)) {
		$message = "New User Added Successfully";
	}
}
?>
<html>
<head>
<title>bala</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<center>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List User</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Add New User</td>
</tr>
<tr>
<td><label>Username</label></td>
<td><input type="text" name="username" class="txtField"></td>
</tr>
<tr>
<td><label>Password</label></td>
<td><input type="password" name="password" class="txtField"></td>
</tr>
<td><label>First Name</label></td>
<td><input type="text" name="firstname" class="txtField"></td>
</tr>
<td><label>Last Name</label></td>
<td><input type="text" name="lastname" class="txtField"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</center>
</body></html>
