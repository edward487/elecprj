<?php include 'navbar.php'?> 
<!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Create Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <div class="container">
          <div align="center">
              <h1><strong>COMPUTER ENGINEERING</strong></h1>
          </div>
          <div class="row position1">
             <div id="gallery-carousel" class="content-section text-center">
                  <div class="col-lg-8 col-lg-offset-2">
                    <h2><strong>Gallery</strong></h2>
                  </div>
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                      <li data-target="#myCarousel" data-slide-to="3"></li>
                      <li data-target="#myCarousel" data-slide-to="4"></li>
                      <li data-target="#myCarousel" data-slide-to="5"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img class="fillwidth " src="img/home1.jpg" alt="JME">
                      </div>

                      <div class="item">
                        <img  class="fillwidth " src="img/home2.jpg" alt="JME">
                      </div>

                      <div class="item">
                        <img class="fillwidth " src="img/home3.jpg" alt="JME">
                      </div>

                      <div class="item">
                        <img  class="fillwidth " src="img/home4.jpg" alt="JME">
                      </div>

                      <div class="item">
                        <img  class="fillwidth " src="img/home5.jpg" alt="JME">
                      </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
              </div>
            </div>
          </div>
      </div><br><br><br><br><Br><br><br><br><br><br><Br>
      <?php include'footer.php'?>
  </body>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</html>