<?php
session_start();
   if($_POST)  {
   	include("bai1.php");		

	$username = $_POST ['username'] ;
	$password = $_POST ['password'] ;
	
	

	$username =  stripcslashes($username);
	$password =  stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	// Noi voi SQL 
	$sql =  "SELECT * FROM users WHERE username = '$username' and password = '$password' ";
	// Cau lenh truy van 
	$query = mysql_query( $sql);
	$data  = mysql_fetch_array($query);
	// Lua chon id 
	$id = $data['id'] ; 


	$row = mysql_num_rows($query);
	if ($row > 0 ) 
	{	$_SESSION["user_id"] = $id ;

		$_SESSION["user_name"] = $username ;

		$_SESSION["user_pass"] = $password ;
		echo "Đăng nhập thành công ";
		 sleep(2);
		 header("Location:hello.php");

	}
	else {
		echo "Không !!";
		sleep(5);
		 header("Location:process.php");

		
	}
	
	


} else {


?>


<!DOCTYPE html>
<html>
    <head>
        <title>Login Page </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
    <div id="form">
        <p>
        <form action="process.php " method="POST">
            <label>Username: </label><br/>
            <input type="text" name="username" value=""/
        </p>

        <p>     <label>password:</label><br/>
            <input type="password" name="password" value=""/>
            </p>

            <input type="submit" name="form_click" value="Đăng nhập "/>
             <a href="cpass.php" tite="Đổi MK "> Đổi MK.

        </form>
         </div> 
    </body>
</html>

<?php }  ?>