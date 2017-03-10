<?php include "navbar.php" ?> 
<!DOCTYPE html>
<html lang="en" class="js csstransforms csstransforms3d">
  <head>
    <title>Job Opportunities</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
    <style>
        body {
            background: url('img/back7.png');
            background-attachment: fixed;
            overflow: hidden;
        }

        canvas {
            position: absolute;
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
        }

        img {
            position: relative;
            cursor: pointer;
        }

        #container {
            position: absolute;
            width: 768px;
            height: 485px;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
        }
    </style>
<body><br><br><br>
    <div id="container">
    </div><br><br><br>
    <script src="js/job.js"></script>
    <script src="js/job2.js"></script>
    <script src="js/job3.js"></script>
</body>
</html>
