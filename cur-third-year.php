<?php include "navbar.php" ?> 
<!DOCTYPE html>
  <html lang="en" class="js csstransforms csstransforms3d">
  <head>
    <title>CpE 3rd Year Curriculum</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cur.css">      
  </head>
      <style>
          body {
             background-color: black;
          }
          strong {
              color: aqua;
          }
          p {
              color: whitesmoke;
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
      <div class="container">
        <div class="col-md-12">
          <h1><strong>THIRD YEAR CURRICULUM</strong></h1>
        </div><br><br><br><br><br><br><br> 
        <img src="img/cpe_cur_y3.png"><br><br><br>
        <div class="row">
            <div class="col-md-12">
                <h3><strong>ELECTRIC CIRCUITS 1</strong></h3>
            </div>
            <div class="col-md-12">
                <p>Fundamental relationships in circuit theory, mesh, and node equations; resistive networks, network theorems; solutions of network problems using Laplace transform; transient analysis; methods of circuit analysis.
                <br><Br>
                Prerequisite: Engineering Physics 2; Integral Calculus
                </p>
            </div><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <h3><strong>ELECTRIC CIRCUITS 2</strong></h3>
            </div>
            <div class="col-md-12">
                <p>Complex algebra and phasors; simple AC circuits; impedance and admittance; mesh and nodal analysis for AC circuits, AC network theorems; power in AC circuits; resonance; three-phase circuits; transformers; two-pork network parameters and transfer function.
                <Br><Br>
                Prerequisite: Electric Circuits 1
                </p>
            </div><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <h3><strong>ELECTRONIC DEVICES AND CIRCUITS</strong></h3>
            </div>
            <div class="col-md-12">
                <p>This covers introduction to quantum mechanics of solid state electronics; diode and transistor characteristics and models (BJT and FET); diode circuit analysis and applications; transistor amplifiers; Boolean logic; transistor switch.
                <Br><br>
                Prerequisite: Engineering Physics 2; Integral Calculus
                </p>
            </div><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <h3><strong>COMPUTER AIDED DRAFTING</strong></h3>
            </div>
            <div class="col-md-12">
                <p>Concepts of computer aided drafting (CAD); introduction to CAD environment; terminologies; and the general operating procedures and techniques in entering and executing basic CAD commands.
                <br><Br>
                Prerequisite: At least 3rd year standing
                </p>
            </div><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <h3><strong>STATICS OF RIGID BODIES</strong></h3>
            </div>
            <div class="col-md-12">
                <p>Force systems; structure analyses; friction; centroids and centers of gravity; and moments of inertia.
                <br><br>
                Prerequisite: Integral Calculus; Engineering Physics 1
                </p>
            </div><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <h3><strong>ENVIRONMENTAL ENGINEERING</strong></h3>
            </div>
            <div class="col-md-12">
                <p>Ecological framework of sustainable development; pollution environments: water, air, and solid; waste treatment processes, disposal, and management; government legislation, rules, and regulations related to the environment and waste management; and environment management system.
                <br><Br>
                Prerequisite: At least 3rd year standing; General and Organic Chemistry
                </p>
            </div><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <h3><strong>DIFFERENTIAL EQUATIONS</strong></h3>
            </div>
            <div class="col-md-12">
                <p>Ordinary differential equations of the first order, linear differential equations with constant coefficient; simultaneous linear equations; applications.
                <Br><br>
                Prerequisite: Integral Calculus
                </p>
            </div><br><br><br><br><br><br><br>     
            <div class="col-md-12">
                <h3><strong>ADVANCED ENGINEERING MATHEMATICS</strong></h3>
            </div>
            <div class="col-md-12">
                <p>A study of selected topics in mathematics and their applications in advanced courses in engineering and other allied sciences. It covers the study of Complex numbers and complex variables. Laplace and inverse Laplace transforms, power series, Fourier series, Fourier transforms, Z-Transforms, power series solution of ordinary differential equations, and partial differential equations.
                <br><Br>
                Prerequisite: Differential Equations
                </p>
            </div><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <h3><strong>DISCRETE MATHEMATICS</strong></h3>
            </div>
            <div class="col-md-12">
                <p>Deals with logic, sets, proofs, growth of functions, theory of numbers, counting techniques, trees and graph theories.
                <Br><br>
                Prerequisite: At least 3rd year standing
                </p>
            </div><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <h3><strong>DATA STRUCTURE AND ALGORITHM ANALYSIS</strong></h3>
            </div>
            <div class="col-md-12">
                <p>Includes linear data structures such as arrays, stacks, queues, linked lists; non-linear data structures such as generalized lists, trees, and graphs; operations on these using algorithms such as insertion, deletion, and transversal.
                <br><br>
                Prerequisite: Computer Fundamentals and Programming
                </p>
            </div><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <h3><strong>COMPUTER HARDWARE FUNDAMENTALS</strong></h3>
            </div>
            <div class="col-md-12">
                <p>It introduces microcomputer systems hardware, operating system and application software installation of basic Local Area Network is also included. It covers topics on microcomputer installation, servicing, and troubleshooting techniques, LAN setup and configuration. Concepts are learned through extensive hands-on activities. The proper use and care of tools and equipment are emphasized in the course.
                <br><br>
                Prerequisite: None
                </p>
            </div><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <h3><strong>LOGIC CIRCUITS AND SWITCHING THEORY</strong></h3>
            </div>
            <div class="col-md-12">
                <p>Includes design and analysis of digital circuits. This course covers both combinational and asynchronous logic circuits with emphasis on solving digital problems using hardwired structures of the complexity of medium and large scale integration.
                <br><Br>
                Prerequisite: Electronic Devices and Circuits
                </p>
            </div><br><br>
        </div><br><br><br><br><br><br><br>
      </div>
    </div>
    <script src="vendor/jquery/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="vendor/turnjs4/lib/turn.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/navbar.js"></script>
  </body>
 </html>
 