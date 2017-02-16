 <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Create Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrapValidator.min.css">
    <link rel="stylesheet" href="css/createaccount.css">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrapValidator.min.js"></script>
    <script src="js/createaccount.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>
       <?php include 'navbar.php'?><br><br><br>
      <div class="container text-bg">
          <div class="panel-heading col-md-offset-4">
              <h1><strong>&emsp;&nbsp;Create Account</strong></h1>
          </div>
          <div class="panel-body">
          <form method="post" action="" id="createaccount">
              <div class="col-md-offset-4">
                  <div class="col-md-8">
                      <div class="form-group">
                          <div class="col-md-4">
                            <label for="Fname"><strong>First Name:</strong></label>
                          </div>
                          <div class="col-md-9">
                            <input type="text" class="form-control" id="Fname" name="fname" placeholder="First name" required>
                          </div>
                      </div><br><br><br>
                      <div class="form-group">
                          <div class="col-md-4">
                              <label for="Lname"><strong>Last Name:</strong></label>
                          </div>
                          <div class="col-md-9">
                              <input type="text" class="form-control" id="Lname" name="lname" placeholder="Last name" required>
                          </div>
                      </div><br><br><br>
                      <div class="form-group">
                          <div class="col-md-4">
                              <label for="Email"><strong>Email Address:</strong></label>
                          </div>
                          <div class="col-md-9">
                              <input type="email" class="form-control" id ="Email" name="email" placeholder="Email" required>
                          </div>
                      </div><br><br><br>
                      <div class="form-group">
                          <div class="col-md-4">
                              <label for="Pwd"><strong>Password:</strong></label>
                          </div>
                          <div class="col-md-9">
                              <input type="password" class="form-control" id="Pwd" name="pwd" required>
                          </div>
                      </div><br><br><br>
                      <div class="form-group">
                          <div class="col-md-5">
                              <label for="Cpwd"><strong>Confirm Password:</strong></label>
                          </div>
                          <div class="col-md-9">
                              <input type="password" class="form-control" id="Cpwd" name="cpwd" required>
                          </div>
                      </div><br><br><Br>
                      <div class="form-group">
                              <div class="col-md-5">
                                <label for="Course"><strong>Course:</strong></label>
                              </div>
                              <div class="col-md-9">
                                  <select class="form-control">
                                      <option></option>
                                      <option>BSCpE-I</option>
                                      <option>BSCpE-II</option>
                                      <option>BSCpE-II</option>
                                      <option>BSCpE-III</option>
                                      <option>BSCpE-IV</option>
                                      <option>BSCpE-V</option>
                                  </select>
                          </div><br><br><br><br>
                          <div class="form-group col-md-5">
                              <div class="g-recaptcha" data-sitekey="6LffBA0UAAAAAN7_ljZqzwXogdtXx69_zQelfXi8"></div>
                          </div>
                          <div class="col-md-9"><button type="button" class="btn btn-success col-md-12">Sign up</button></div>
                      </div>
                  </div>
              </div>
          </form>
          </div>
      </div><br><br><br>
  </body>
  </html>
