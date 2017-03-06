 <?php include 'navbar.php'?>
<!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Create Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/contact.css">

  </head>
  <body>
     <br><br><br><br><br><br><br>
    <div class="container">
        <div class="col-md-offset-4">
            <div class="col-md-8">
                <h1><p class="contact-main-text"><strong>Contact Us</strong></p></h1>
            </div>
        </div><br><br><br>
        <div class="col-md-offset-3 col-md-6">
        <p class="contact-main-text">
            JME Inc. is here to provide you with more information, answers any questions you may have and create an effective solutions for your instructional needs
        </p>
        </div><br><br><br>
        <div class="col-md-offset-5">&emsp;&emsp;&nbsp;
             <button type="button" class="btn btn-success" data-toggle="modal" data-target="#contact-form">Click here</button>
        </div>
        <!-- Modal -->
      <div class="modal fade" id="contact-form" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content modal-md">
            <div class="modal-header" align="center">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"><strong>Feel free to message us</strong></h4>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="form-group form-inline">
                        <div class="col-md-offset-3">
                            <label><strong>&emsp;&emsp;&emsp;&emsp;We like to recieve a messages.</strong></label><br><br>
                            <label><span class="glyphicon glyphicon-user"></span>&emsp;Your Name:</label>
                            <input type="text" class="form-control" placeholder="Enter your name"><br><br>
                            <label><span class="glyphicon glyphicon-envelope"></span>&emsp;Your Email:</label>
                            <input type="text" class="form-control" placeholder="Enter your email"><br><br>
                            <label><span class="glyphicon glyphicon-tag"></span>&emsp;Subject:</label>&emsp;&nbsp;
                            <input type="text" class="form-control" placeholder="Subject">
                        </div><br>
                        <div class="col-md-offset-3">
                            <label>Message</label><br>
                            <textarea cols="40" rows="8" placeholder="Enter your comment here"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-ok"></span>Save</button>
              <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Close</button>
            </div>
          </div>
        </div>
     </div>
    </div>
    </div><br><br><br><br><br><br><br><br><br><br><br><Br>
  </body>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/createaccount.js"></script>
</html>
<?php include'footer.php'?>
