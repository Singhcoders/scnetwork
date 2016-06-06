<?php	
$host = "localhost";
$user = "root";
$pass= "";
$db = "sc_social";
mysql_connect("$host","$user", "$pass")or die("cannot connect");
mysql_select_db("$db")or die("cannot select DB");
    ?>