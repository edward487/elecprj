 <!DOCTYPE html>
  <html lang="en" class="js csstransforms csstransforms3d">
  <head>
    <title>CpE 5th Year Curriculum</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cur.css">
           
  </head>
  <body>
       <?php include "navbar.php" ?>
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
          <h1><strong>FIFTH YEAR CURRICULUM</strong></h1>
        </div><br><br><br><br>
        <img src="img/cpe_cur_y5.png">
        <div class="row">
            <div class="col-md-4">
                <h3><strong>DESIGN PROJECT 1 (METHODS OF RESEARCH)</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "This provides essential ideas, concepts, and principles in methods of research as well as the important skills needed by the researchers in the various techniques and procedures in the correct preparation and presentation of research report. Required output is a project proposal.
                
                Prerequisite: Microprocessor Systems"; ?>
            </div><br><br>
            <div class="col-md-4">
                <h3><strong>DESIGN PROJECT 2 (PROJECT IMPLEMENTATION)</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "This is a course in which individuals or small teams use the principle of computer engineering in the design, building, and testing the special circuits or simple systems.
                
                Prerequisite: Design Project 1 (Methods of Research) "; ?>
            </div><br><br>
            <div class="col-md-4">
                <h3><strong>ENTREPRENEURSHIP</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "It includes the journey into the world of entrepreneurship with introspection of business idea into a viable venture. The focus is on unleashing the entrepreneurship spirit in everyone.
                
                Prerequisite: At least 5th year standing"; ?>
            </div><br><br>
            <div class="col-md-4">
                <h3><strong>ENGINEERING ECONOMY</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "Basic economy study methods; decisions under certainty; decisions recognizing risk; and decisions admitting uncertainty.
                
                Prerequisite: At least 3rd year standing"; ?>
            </div><br><br>
            <div class="col-md-4">
                <h3><strong>SEMINARS AND FIELD TRIPS</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "Includes seminars and lectures on current trends and issues on Computer Engineering developments. Includes field trips to different companies and plants dealing with computer system facilities.
                
                Prerequisite: None"; ?>
            </div><br><br>
            <div class="col-md-4">
                <h3><strong>COMPUTER SYSTEM ARCHITECTURE</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "This subject includes the theory and principles of computer design. The focus is on the understanding of the design issues specifically instruction set architecture and hardware architecture. The students are encouraged to have a case study on the existing architectures of computer designs to fully understand its principles.
                
                Prerequisite: Computer System Organization w/ Assembly Language; Advanced Logic Circuits"; ?>
            </div><br><br>
            <div class="col-md-4">
                <h3><strong>COMPUTER NETWORKS</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "Includes computer networks and open system standards; transmission media and methods; LAN and WAN technologies; packet forwarding; host-to-host communications; network design; network administration, management and security.
                
                Prerequisite: Computer Fundamentals and Programming"; ?>
            </div><br><br>     
            <div class="col-md-4">
                <h3><strong>SYSTEM ANALYSIS DESIGN</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "Covers the different phases of systems development and engineering with focus on analysis and design. It covers how to handle requirements, architectural designs, integration and verification and shall be facilitated through project-team design approach in accordance with recognized standards. The students will also be introduced to recent work on the complexity of real-world systems, with issues such as multilevel systems and iterative development.
                
                Prerequisite: Data Structures and Algorithm Analysis; Object-Oriented Programming"; ?>
            </div><br><br>
            <div class="col-md-4">
                <h3><strong>PRINCIPLES OF COMMUNICATION</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "Deals with logic, sets, proofs, growth of functions, theory of numbers, counting techniques, trees and graph theories.
                
                Prerequisite: At least 3rd year standing"; ?>
            </div><br><br>
            <div class="col-md-4">
                <h3><strong>ENGINEERING ETHICS AND COMPUTER LAWS</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "It includes moral issues and decisions confronting individuals and organizations involved in engineering. This subject will focus on the study of the code of ethics, conflict of interest, safety and risk tradeoffs in design, property, patents, trade secrets, and contemporary issues in engineering.
                
                Prerequisite: At least 5th year standing"; ?>
            </div><br><br>
            <div class="col-md-4">
                <h3><strong>SOFTWARE ENGINEERING</strong></h3>
            </div>
            <div class="col-md-12">
                <?php echo "The subject includes lifecycle models for software development; software requirements specification; structured analysis and design; software metrics and planning; software testing; reusable management issues.
                
                Prerequisite: Data Structure and Algorithm Analysis"; ?>
            </div><br><br>
        </div>
      </div>
    </div>
    <script src="vendor/jquery/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="vendor/turnjs4/lib/turn.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/navbar.js"></script>
  </body>
 </html>
 