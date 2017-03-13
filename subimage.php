<html>

<head>

    <style type="text/css">

         #container {
            position:relative;
            display:inline-block;
        }
        #main-image {
            background: url('img/about5.png') no-repeat;
            z-index:0;
        }
        #sub-image {
            position:absolute;
            top:0px;
            left:0px;
            width:100%;
            height:100%;
            opacity:0;
            background:url('img/about2.jpg') center center no-repeat;
            z-index:1;
        }
           #sub-image2 {
            position:absolute;
            top:30px;
            left:30px;
            width:100%;
            height:100%;
            opacity:0;
            background:url('img/about5.png') center center no-repeat;
            z-index:1;
        }
    </style>
    <script type="text/javascript">        
        function showSubImage(){
            document.getElementById('sub-image').style.opacity = 100;
        }
        
        function hideSubImage(){
            document.getElementById('sub-image').style.opacity = 0;
        }

    </script>
</head>
<body>
    <div id="container" OnClick="showSubImage();" onClick="hideSubImage();">
        <img id="main-image" style="width: 600px; height: 700px;" src="img/back7.png"/>
        <div id="sub-image"></div>    
    </div>
</body>
</html>