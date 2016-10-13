<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="process.php" />
</head>
<body>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<th align="center">Trang chủ </th>
</tr>
<tr class="tablerow">
<td>
<?php
if($_SESSION["user_name"]) {
?>
Welcome <?php echo $_SESSION["user_name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
Click here to <a href="cpass.php" tite="">Change password.
<?php
}
?>
</td>
</table>
</tr>
</body></html>