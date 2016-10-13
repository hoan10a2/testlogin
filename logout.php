<?php

session_start();


	unset($_SESSION["user_name"]);
	unset($_SESSION["user_pass"]);
	

	echo "Quay lại TC " ; 
	sleep(5);
	header("Location:process.php");
	
	
	


?>
<form align="right" name="form1" method="GET" action="process.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>




