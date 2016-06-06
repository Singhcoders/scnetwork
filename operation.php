<?php
include 'include/include.php';
if($_POST['b_val']=="login"){
$user=$_POST['user'];
$pass=$_POST['pass'];
$error="";
     $sql="SELECT * FROM sc_user WHERE user_email='$user' 
           AND user_pass='$pass'";
        $res=mysql_query($sql)or die(mysql_error());   
            if(mysql_num_rows($res) == 1){ 
                while($row=mysql_fetch_assoc($res)){
                    $_SESSION['sc_id'] =$row['id'];
                    $_SESSION['u_full'] = $row['user_full'];
                    $_SESSION['u_email'] = $row['user_email'];
                }  
                
                echo true;
//            redirect("home.php");
            }else {
                echo false;
                  
            }
}
?>
