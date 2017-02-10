 <!DOCTYPE html>
  <html lang="en" class="js csstransforms csstransforms3d">
  <head>
    <title>Create Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cur-second-year.css">
     
    <script src="vendor/jquery/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="vendor/turnjs4/lib/turn.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/navbar.js"></script>
      
</style>
  </head>
  <body>
       <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#trends">Trends</a></li>
            <li><a href="#faculty">Faculty</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Curriculum<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="cur-first-year.php">First Year</a></li>
                <li><a href="cur-second-year.php">Second Year</a></li>
                <li><a href="#">Third Year</a></li>
                <li><a href="#">Fourth Year</a></li>
                <li><a href="#">Fifth Year</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="createaccount.php">Sign up</a></li>
            <li><a href="login.php">Log in</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
      </nav><hr><hr><br>
    <div class="container">
        <div id="magazine">
            <div style="background-image:url('img/IMG_2344.JPG');"></div>
            <div style="background-image:url('img/IMG_2345.JPG');"></div>
            <div style="background-image:url('img/IMG_2346.JPG');"></div>
            <div style="background-image:url('img/IMG_2347.JPG');"></div>
            <div style="background-image:url('img/IMG_2348.JPG');"></div>
            <div style="background-image:url('img/IMG_2348.JPG');"></div>
        </div>
    </div>
<script>
    	$(window).ready(function() {
		$('#magazine').turn({
							display: 'double',
							acceleration: true,
                            width: 400,
                            height: 300,
                            autoCenter: true,
							gradients: !$.isTouch,
							elevation:50,
							when: {
								turned: function(e, page) {
									console.log('Current view: ', $(this).turn('view'));
								}
							}
                                });


	});
	
	
	$(window).bind('keydown', function(e){
		
		if (e.keyCode==37)
			$('#magazine').turn('previous');
		else if (e.keyCode==39)
			$('#magazine').turn('next');
			
	});
</script>
      <div class="container">
        <div id="curr">
        <div class="col-md-12">
          <h1><strong>SECOND YEAR CURRICULUM</strong></h1>
        </div><br><br><br><br>
        <div id="curpic">
            <img src="img/cpe_cur_y2.png">     
        </div>    
        <div class="row">
            <div class="col-md-4">
                <h3><strong>COMPUTER FUNDAMENTALS AND PROGRAMMING</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "Basic information technology concepts; fundamentals of algorithm development; high-level language and programming applications; computer solution of engineering problems.
                
                Prerequisite: At least 2nd year standing"; ?>
            </div><br><br>
            <div class="col-md-4">
                <h3><strong>ENGINEERING PHYSICS 1</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "Vectors; kinematics; dynamics; work; energy; and power; impulse and momentum; rotation; dynamics of rotation; elasticity; and oscillation.
                
                Prerequisite: College Algebra; Plane and Spherical Trigonometry"; ?>
            </div><br><br>
            <div class="col-md-4">
                <h3><strong>ENGINEERING PHYSICS 2</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "Fluids; thermal expansion, thermal stress; heat transfer, calorimetry, waves; electrostatics; electricity; magnetism; optics; image formation by plane and curved mirrors; and image formation by thin lenses.
                
                Prerequisite: Engineering Physics 1"; ?>
            </div><br><br>
            <div class="col-md-4">
                <h3><strong>DIFFERENTIAL CALCULUS</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "A 4-unit Mathematics class for sophomore engineering students. Being the first of the two series of Calculus, it includes functions, limits and continuity, derivatives and differentiation, partial derivatives and applications.
                
                Prerequisite: Advanced Algebra; Analytic Geometry; Solid Mensuration"; ?>
            </div><br><br>
            <div class="col-md-4">
                <h3><strong>INTEGRAL CALCULUS</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "Integral calculus is the second course in the series of Calculus subjects. A 4-unit lecture course that covers the general properties of indefinite integrals. It includes integration formulas on algebraic, logarithmic, exponential, trigonometric, and inverse trigonometric functions. It also includes the different techniques of integration namely; transformation of trigonometric formulas, integration by parts, algebraic and trigonometric substitution, and integration of rational functions together with basic applications that includes plane areas and solids of revolution, that employs definite integrals.
                
                Prerequisite: Differential Calculus"; ?>
            </div><br><br>
            <div class="col-md-4">
                <h3><strong>PROBABILITY AND STATISTICS</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "Basic principles of statistics. Charts, graphs, presentations and analysis of data averages, medians, mode, deviations, probability, normal curves and applications.
                
                Prerequisite: College Algebra"; ?>
            </div><br><br>           
        </div>
      </div>
    </div>
  </body>
 </html>
 