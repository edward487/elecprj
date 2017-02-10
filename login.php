 <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Log in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
      <?php include 'navbar.php' ?><br><br>
    <div class="container" style="margin-top:40px">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading" align="center">
                            <strong> Sign in to our website</strong>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="#" method="POST">
                                <fieldset>
                                    <div class="row">
                                        <div class="center-block">
                                            <!--Logo natin ang ilalagay dito-->
                                            <img class="profile-img"
                                                src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-user"></i>
                                                    </span> 
                                                    <input class="form-control" placeholder="Username" name="loginname" type="text" autofocus>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="glyphicon glyphicon-lock"></i>
                                                    </span>
                                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-success btn-block" value="Sign in">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="panel-footer" align="center">
                            Don't have an account? <a href="createaccount.php" onClick=""> Sign Up Here </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </body>
</html>