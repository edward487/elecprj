<?php include "navbar.php" ?>
<!DOCTYPE html>
  <html lang="en" class="js csstransforms csstransforms3d">
  <head>
    <title>CpE 2nd Year Curriculum</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cur.css">      
  </head>
  <style>
   strong {
         color: aqua;
   }
   body {
         background: url('img/back7.png');
         background-attachment: fixed;
   }
   p {
         color: whitesmoke;
   }
   p.ridge {
         border-style: ridge;
         border-width: 3px; 
         text-shadow:0 1px 1px rgba(0,0,0,.6);
         transition: box-shadow .5s ease;
         border-color: aqua; 
         padding: 10px;
         background: rgba(0,0,0,0.7);
   } 
  </style>
  <body>
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
</script><br><br><br><br>
      <form id="summary-form" method="post" action="">
      <div class="container">
        <div class="col-md-12">
          <h1><strong>SECOND YEAR CURRICULUM</strong></h1>
        </div><br><br><br><br><br><br><br>
          <div id="screen-seatplan">
            <img src="img/cpe_cur_y2.png"><br><br><br>
          </div>
        <div class="row">
            <div class="col-md-12">
                <h3><strong>COMPUTER FUNDAMENTALS AND PROGRAMMING</strong></h3>
            </div>
            <div class="col-md-12">
                <p class="ridge">Basic information technology concepts; fundamentals of algorithm development; high-level language and programming applications; computer solution of engineering problems.
                <br><Br>
                Prerequisite: At least 2nd year standing
                </p>
            </div><br><br><br><br><br><br><br><br><br><br> 
            <div class="col-md-12">
                <h3><strong>ENGINEERING PHYSICS 1</strong></h3>
            </div>
            <div class="col-md-12">
                <p class="ridge">Vectors; kinematics; dynamics; work; energy; and power; impulse and momentum; rotation; dynamics of rotation; elasticity; and oscillation.
                <br><Br>
                Prerequisite: College Algebra; Plane and Spherical Trigonometry
                </p>
            </div><br><br><br><br><br><br><br><br><br><br> 
            <div class="col-md-12">
                <h3><strong>ENGINEERING PHYSICS 2</strong></h3>
            </div>
            <div class="col-md-12">
                <p class="ridge">Fluids; thermal expansion, thermal stress; heat transfer, calorimetry, waves; electrostatics; electricity; magnetism; optics; image formation by plane and curved mirrors; and image formation by thin lenses.
                <br><Br>
                Prerequisite: Engineering Physics 1
                </p>
            </div><br><br><br><br><br><br><br><br><br><br> 
            <div class="col-md-12">
                <h3><strong>DIFFERENTIAL CALCULUS</strong></h3>
            </div>
            <div class="col-md-12">
                <p class="ridge">A 4-unit Mathematics class for sophomore engineering students. Being the first of the two series of Calculus, it includes functions, limits and continuity, derivatives and differentiation, partial derivatives and applications.
                <br><br>
                Prerequisite: Advanced Algebra; Analytic Geometry; Solid Mensuration
                </p>
            </div><br><br><br><br><br><br><br><br><br><br> 
            <div class="col-md-12">
                <h3><strong>INTEGRAL CALCULUS</strong></h3>
            </div>
            <div class="col-md-12">
                <p class="ridge">Integral calculus is the second course in the series of Calculus subjects. A 4-unit lecture course that covers the general properties of indefinite integrals. It includes integration formulas on algebraic, logarithmic, exponential, trigonometric, and inverse trigonometric functions. It also includes the different techniques of integration namely; transformation of trigonometric formulas, integration by parts, algebraic and trigonometric substitution, and integration of rational functions together with basic applications that includes plane areas and solids of revolution, that employs definite integrals.
                <br><Br>
                Prerequisite: Differential Calculus
                </p>
            </div><br><br><br><br><br><br><br><br><br><br> 
            <div class="col-md-12">
                <h3><strong>PROBABILITY AND STATISTICS</strong></h3>
            </div>
            <div class="col-md-12">
                <p class="ridge">Basic principles of statistics. Charts, graphs, presentations and analysis of data averages, medians, mode, deviations, probability, normal curves and applications.
                <br><br>
                Prerequisite: College Algebra
                </p>
            </div><br><br>           
        </div><br><br><br><br><br><br><br>
      </div>
    </div>
      </form>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="vendor/turnjs4/lib/turn.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
  </body>
 </html>
 