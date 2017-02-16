 <!DOCTYPE html>
  <html lang="en" class="js csstransforms csstransforms3d">
  <head>
    <title>CpE 1st Year Curriculum</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cur.css">
     
  </head>
  <body>
      <?php include "navbar.php" ?>
      <br><br><br><br>
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
      <div class="container">
        <div class="col-md-12">
          <h1><strong>FIRST YEAR CURRICULUM</strong></h1>
        </div><br><br><br><br>
        <img src="img/cpe_cur_y1.png">
        <div class="row">
            <div class="col-md-4">
                <h3><strong>ENGINEERING DRAWING</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "Practices and techniques of graphical communication; application of drafting instruments, lettering scale, and units of measure; descriptive geometry; orthographic projections; auxiliary views; dimensioning; sectional views; pictorial drawings; requirements of engineering working drawings; and assembly and exploded detailed drawings. 
                
                Prerequisite: None"; ?>
            </div><br><br>
            <div class="col-md-4">
                <h3><strong>GENERAL AND ORGANIC CHEMISTRY</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "Basic concepts of matter and its classification; mass relationships in chemical reactions; properties of gases, liquids and solids; concepts of thermos chemistry; quantum theory and electronic behavior; periodic relationship of elements in the periodic table, intermolecular forces; and solutions.
                
                Prerequisite: None"; ?>
            </div><br><br>
            <div class="col-md-4">
                <h3><strong>COLLEGE ALGEBRA</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "Algebraic expressions and equations, solution sets of algebraic equations in one variable: linear, quadratic, polynomial degree n, fractional, radical equations, quadratic in form, exponential and logarithmic equations; decomposition of fractions into partial fractions, solution of systems of linear equations involving up to three variables.
                
                Prerequisite: None"; ?>
            </div><br><br>
            <div class="col-md-4">
                <h3><strong>PLANE AND SPHERICAL TRIGONOMETRY</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "The course aims to prepare students for further study in Mathematics and other related fields. It begins with a brief discussion of the trigonometric functions for acute angles, thus leading to the spherical functions of trigonometry. Problems have been made simple to enable students to grasp principles and learn methods that can be applied in engineering fields for estimation and accuracy. A considerable portion of the subject matter is concerned with the study of properties of the relations among plane and spherical trigonometric functions. Trigonometric functions; identities and equations; solutions of triangles; laws of sine; laws of cosine; complex numbers; inverse trigonometric functions.
                
                Prerequisite: None"; ?>
            </div><br><br>
            <div class="col-md-4">
                <h3><strong>ADVANCED ALGEBRA</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "Matrices and determinants, arithmetic and geometric series, solution sets of different types of inequalities and systems involving quadratics, solution of linear equations using determinants and matrices.
                
                Prerequisite: College Algebra"; ?>
            </div><br><br>
            <div class="col-md-4">
                <h3><strong>ANALYTIC GEOMETRY</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "Equations of lines and conic sections; curve tracing in both rectangular and polar coordinates in two-dimensional space. 
                
                Prerequisite: College Algebra; Plane and Spherical Trigonometry"; ?>
            </div><br><br>
            <div class="col-md-4">
                <h3><strong>SOLID MENSURATION</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "Concept of lines and planes; Cavalier’s and Volume theorems; formulas for areas of plane figures, volumes for solids; volumes and surface areas for spheres, pyramids, and cones; zone, sector and segment of a sphere; theorems of Pappus. 
                
                Prerequisite: College Algebra; Plane and Spherical Trigonometry"; ?>
            </div><br><br>            
        </div>
      </div>
    </div>
    <script src="vendor/jquery/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/navbar.js"></script>
    <script type="text/javascript" src="vendor/turnjs4/lib/turn.min.js"></script>
  </body>
  
 </html>
 