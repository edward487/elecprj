<?php include "navbar.php" ?> 
<!DOCTYPE html>
  <html lang="en" class="js csstransforms csstransforms3d">
  <head>
    <title>CpE 4th Year Curriculum</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cur.css">
           
  </head>
  <body>
      <style>
          body {
              background-color: black;
          }
          strong {
              color: aqua
          }
          p {
              color: whitesmoke;
          }
      </style>
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
          <h1><strong>FOURTH YEAR CURRICULUM</strong></h1>
        </div><br><br><br><br><br><br><br>
        <img src="img/cpe_cur_y4.png"><br><br><br><br>
        <div class="row">
            <div class="col-md-12">
                <h3><strong>DIGITAL SIGNAL PROCESSING</strong></h3>
            </div>
            <div class="col-md-12">
                <p>The course includes the fundamental concepts and practical application of Digital Signal Processing.
                <br><Br>
                Prerequisite: Advanced Engineering Mathematics for Computer Engineering
                </p>
            </div><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <h3><strong>OBJECT- ORIENTED PROGRAMMING</strong></h3>
            </div>
            <div class="col-md-12">
                <p>Introduces object-oriented programming concepts and techniques using an object-oriented programming language (e.g. C++, Java, Python, etc.). It covers the imperative language features of the language in comparison with C and involves the students in graphical user interface (GUI) development. The course also involves the students in hands-on work using various software tolls based upon the latest Software Development Kit (SDK) of the programming language used.
                <br><br>
                Prerequisite: Data Structure and Algorithm Analysis
                </p>
            </div><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <h3><strong>MICROPROCESSOR SYSTEM</strong></h3>
            </div>
            <div class="col-md-12">
                <p>The study of the design, and application of microprocessor systems based on the stated requirements. The focus is on the basic understanding of its structure and function to appreciate the architectural design of the microprocessor. The students are encouraged to study various types of microprocessors to acquire a better understanding of microprocessors.
                <br><br>
                Prerequisite: Computer System Organization w/ Assembly Language; Advanced Logic Circuits
                </p>
            </div><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <h3><strong>SAFETY ENGINEERING</strong></h3>
            </div>
            <div class="col-md-12">
                <p>Evolution of safety management; safety terminology; safety programs adapted by high risk industries; hazards in the construction, manufacturing gas and power plants, and other engineering industries and how to prevent or irrigate them; techniques in hazard identification and analysis in workplaces; off-the-job safety; disaster prevention and mitigation; and incident investigation.
                <Br><Br>
                Prerequisite: At least 4th year standing
                </p>
            </div><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <h3><strong>DYNAMICS OF RIGID BODIES</strong></h3>
            </div>
            <div class="col-md-12">
                <p>Kinetics and kinematics of particle; kinetics and kinematics of rigid bodies; work energy method; and impulse and momentum.
                <br><br>
                Prerequisite: Statics of Rigid Bodies
                </p>
            </div><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <h3><strong>STRENGTH OF MATERIALS</strong></h3>
            </div>
            <div class="col-md-12">
                <p>Axial stress and strain; stress for torsion and bending; combined stresses; beam deflections; indeterminate beams; and elastic instability.
                <br><br>
                Prerequisite: Statics of Rigid Bodies
                </p>
            </div><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <h3><strong>CONTROL SYSTEMS</strong></h3>
            </div>
            <div class="col-md-12">
                <p>Includes the control; devises equations of a system and block diagram systems.
                <Br><br>
                Prerequisite: Electric Circuits 2; Electronic Devices and Circuits
                </p>
            </div><br><br><br><br><br><br><br>     
            <div class="col-md-12">
                <h3><strong>COMPUTER SYSTEM ORGANIZATION W/ ASSEMBLY LANGUAGE</strong></h3>
            </div>
            <div class="col-md-12">
                <p>The subject includes the internal number representation and arithmetic; computer structure and machine language assembly language instructions.
                <br><br>
                Prerequisite: Data Structure and Algorithm Analysis
                </p>
            </div><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <h3><strong>PRINCIPLES OF COMMUNICATION</strong></h3>
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
                <p>Includes theory and components of data communication systems; data transmission techniques; communication error detection and correction; computer communication interfaces and adapters; telephone system interfaces. 
                <br><br>
                Prerequisite: None
                </p>
            </div><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <h3><strong>DATA COMMUNICATIONS</strong></h3>
            </div>
            <div class="col-md-12">
                <p>Includes communication systems; data transmission techniques; spectral analysis of signals; noise and distortion; methods of analog and digital modulation; multiplexing systems; telephony; introduction of information theory.
                <br><br>
                Prerequisite: Electric Circuits 2; Electronic Devices and Circuits
                </p>
            </div><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <h3><strong>OPERATING SYSTEMS</strong></h3>
            </div>
            <div class="col-md-12">
                <p>The subject includes different policies and strategies used by an operating system. Topics include operating systems structures, process management, storage management, file systems, and distributed system.
                <br><br>
                Prerequisite: Computer System Organization w/ Assembly Language
                </p>
            </div><br><br><br><br><br><br><br>
            <div class="col-md-12">
                <h3><strong>ADVANCED LOGIC CIRCUITS</strong></h3>
            </div>
            <div class="col-md-12">
                <p>This course on digital design focuses on different methodologies and styles in hardware modeling with emphasis on the use of hardware description languages (HDLs). It covers very high speed integrated circuit hardware description language (VHDL) fundamental language concepts and elements and the different levels of description such as behavioral and structural.
                <br><br>
                Prerequisite: Logic Circuits and Switching Theory
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
 