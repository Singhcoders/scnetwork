<?php	
$host = "localhost";
$user = "ds_123";
$pass= "962030";
$db = "sc_social";
mysql_connect($host,$user,$pass)or die("cannot connect");
mysql_select_db("$db")or die("cannot select DB");
    ?> 