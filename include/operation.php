<?php
$host = "localhost";
$user = "root";
$pass= "";
$db = "sc_social";
mysql_connect("$host","$user", "$pass")or die("cannot connect");
mysql_select_db("$db")or die("cannot select DB");
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
                    $_SESSION['user_email'] = $row['user_email'];
                }
            redirect("home.php");
            }else {
                  echo'<div class="alert alert-danger">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Warning!</strong> No Combination found for the UserId and Password entered !.
                </div>';
            }
}
?>
