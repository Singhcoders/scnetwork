<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="container">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header m_header" style="padding:35px 50px;">
          <h4 class="h4"><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
            <form role="form" method="POST" action="">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="text" class="form-control" id="usrname" name="uname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" name="pass" placeholder="Enter password">
            </div>
                <div class="row" style="margin-top:7%;">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success btn-block"> Login</button>
                    </div>
                    <div class="col-md-6">
                    <a class="btn btn-success btn-block reg" data-toggle="modal" data-target="#myModal"> Register </a>
                    </div>
                </div>
          </form>
        </div>
      </div>
       <!-- Regester Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">  <!-- Modal content-->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register</h4>
        </div>
        <div class="modal-body">
            <form method="POST" id ="myForm" action="" class="form-horizontal" role="form">
                <div class="form-group">
                    <div class="col-md-6"><input type="text" class="form-control" name="first" placeholder="First name" required></div>
                    <div class="col-md-6"><input type="text" class="form-control" name="last" placeholder="Last name" required></div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="email" class="form-control" name="email1" placeholder="Email" required>
                    </div>
                </div>
                   <div class="form-group">
                    <div class="col-md-12">
                        <input type="email" class="form-control" name="email2" placeholder="Re-enter email" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="passsword" class="form-control" name="pass" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label>Birthday</label>
                        <input type="date" class="form-control" name="dob" placeholder="Birthday">
                    </div>
                </div>
                <div class="form-group">
                    <label class="radio-inline"><input type="radio" name="gen" value="male">Male</label>
                    <label class="radio-inline"><input type="radio" name="gen" value="female">Female</label>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary active" data-dismiss="modal" name="upload"  style="float: right;">Submit</button> 
            <button type="button" class="btn btn-default " data-dismiss="modal" style="float: left;">Close</button>
        </div>
      </div>
    </div>
  </div><!-- Register Modal End -->
          </div>
</div>
</body>
</html>
