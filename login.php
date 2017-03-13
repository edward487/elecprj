 <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Log in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="vendor/animate.css-master/animate.min.css">
  </head>
  <body>
      <?php include 'navbar.php' ?><br><br>
    <div class="container" style="margin-top:40px">
            <div class="row">
                    <div class="col-sm-6 col-md-4 col-md-offset-4 blur">
                        <div class="animate animated fadeIn">
                            <div class="panel-heading" align="center">
                                <h4><strong>Sign in to our Website</strong></h4>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="#" method="POST">
                                    <fieldset>
                                        <div class="row">
                                            <div class="center-block">
                                                <!--Logo natin ang ilalagay dito-->
                                                <img src="img/logo.png" style="width: 100px; height: 100px; margin-left: 120px; margin-bottom: 40px;" alt="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                                <div class="form-group">
                                                        <input class="blur-textbox" placeholder="Username" name="loginname" type="text" autofocus>
                                                </div>
                                                <div class="form-group">
                                                        <input class="blur-textbox" placeholder="Password" name="password" type="password" value="">
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="blur-login btn-block"><strong>Login</strong></button>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            <div align="center" class="bottom-footer">
                                Don't have an account? <a href="createaccount.php" onClick=""> Sign Up Here </a>
                            </div>
                        </div>
                    </div>
            </div>
        </div><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <?php include "footer.php" ?>
     </body>
     <script src="vendor/jquery/jquery.min.js"></script>
     <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      
</html>
