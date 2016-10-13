 <?php
 session_start();
 include "bai1.php";



 
  if ($_POST){
/*---------*/

  $username = $_SESSION['user_name'];
  $oldpass  = $_POST ['password'] ;
  $newpass  = $_POST ['newpassword'];
  $rp       = $_POST ['confirm'];

  



    

    //check pass db 
  $sql1 =  ("SELECT * FROM users WHERE username = '$username' ") or die ("");
  
  $query = mysql_query( $sql1 ) or die (" Ko khớp");
  $row = mysql_num_rows($query); 
  $data  = mysql_fetch_array($query);
  $id = $data['id'] ;
  if ($row = 0 ) 
  {  
    echo "MK ko khớp ";
    }

  else {
          $_SESSION["user_id"] = $id ;
        $q = mysql_query("UPDATE `users` SET `password`='$newpass' WHERE `id` = $id ");
         

        echo "Đổi mật khẩu thành công". $id ; 
        
    
     
  }
} else{?>

      <html>
     <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Thay đổi số liệu </title>
     </head>
    <body>
    <h1>Dữ liệu mới </h1>

   
    <form action  method="POST" action="cpass.php">
    <table>
    <tr>

    </tr>
    <tr>
    <td>Điền mật khẩu cũ:</td>
    <td><input type="password" size="10" name="Password"></td>
    </tr>
  <tr>
    <td>Điền mật khẩu mới :</td>
    <td><input type="password" size="10" name="newpassword"></td>
    </tr>
    <tr>
   <td>Điền lại mật khẩu mới :</td>
   <td><input type="password" size="10" name="confirm"></td>
    </tr>
    </table>
    <p><input type="submit" value="Thay đổi">
    </form>
   <p><a href="process.php">Home</a>
   
   </body>
    </html>  
    <?php } ?>




 


