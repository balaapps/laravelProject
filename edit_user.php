<?php
require_once("db.php");
if(count($_POST)>0) {
	$sql = "UPDATE users set username='" . $_POST["username"] . "', password='" . $_POST["password"] . "', firstname='" . $_POST["firstname"] . "', lastname='" . $_POST["lastname"] . "' WHERE userid='" . $_POST["userid"] . "'";
	mysqli_query($conn,$sql);
	$message = "Record Modified Successfully";
}
$select_query = "SELECT * FROM users WHERE userid='" . $_GET["userid"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>
<html>
<head>
<title>Add New User</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="index.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List User</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Edit User</td>
</tr>
<tr>
<td><label>Username</label></td>
<td><input type="hidden" name="userid" class="txtField" value="<?php echo $row['userid']; ?>"><input type="text" name="username" class="txtField" value="<?php echo $row['username']; ?>"></td>
</tr>
<tr>
<td><label>Password</label></td>
<td><input type="password" name="password" class="txtField" value="<?php echo $row['password']; ?>"></td>
</tr>
<td><label>First Name</label></td>
<td><input type="text" name="firstname" class="txtField" value="<?php echo $row['firstname']; ?>"></td>
</tr>
<td><label>Last Name</label></td>
<td><input type="text" name="lastname" class="txtField" value="<?php echo $row['lastname']; ?>"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>
