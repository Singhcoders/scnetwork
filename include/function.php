<?php 
 function getHeader($title){
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $title ?></title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li> 
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<?php
 }
 function getFooter(){
 	?>
</body>
</html>
 	<?php

 }
 function login(){
    $error="";
     $sql="SELECT * FROM login WHERE email1='$user' 
           AND password='$pass'";
        $res=mysql_query($sql)or die(mysql_error());
            if(mysql_num_rows($res) == 1){ 
                while($row=mysql_fetch_assoc($res)){
                    $_SESSION['p_id'] =$row['pid'];
                    $_SESSION['firstname'] = $row['firstname1'];
                    $_SESSION['lastname'] = $row['lastname1'];
                }
                //echo"<script>alert('Login Successfuly!')</script>";
                redirect("home.php");
            }else {
                  $error='<div class="alert alert-danger">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Warning!</strong> No Combination found for the UserId and Password entered !.
                </div>';
            }
            return $error;
}