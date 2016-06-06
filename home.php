<?php
include 'include/include.php';
getHeader($_SESSION['u_full']);
 echo "<h1>". $_SESSION['sc_id']."</h1>";
 echo  "<h1>".$_SESSION['u_email']."</h1>";
 getFooter();
 ?>

