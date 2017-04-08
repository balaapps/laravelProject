<?php
require_once("db.php");
$sql = "DELETE FROM users WHERE userid='" . $_GET["userid"] . "'";
mysqli_query($conn,$sql);
header("Location:index.php");
?>