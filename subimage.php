<html>

<head>

    <style type="text/css">
#container {
  width:267px;
  height:272px;
  top:100px;
  left:100px;
  position:absolute;
  font-size:16px;
  text-shadow:white 0px 0px 6px;
  text-align:center;
}
#box1 {
  background-image: -moz-image-rect(url(img/about2.png), 0%, 50%, 50%, 0%);
  width:133px;
  height:136px;
  position:absolute;
}
#box2 {
  background-image: -moz-image-rect(url(https://mdn.mozillademos.org/files/12053/firefox.png), 0%, 100%, 50%, 50%);
  width:133px;
  height:136px;
  position:absolute;
}
#box3 {
  background-image: -moz-image-rect(url(https://mdn.mozillademos.org/files/12053/firefox.png), 50%, 50%, 100%, 0%);
  width:133px;
  height:136px;
  position:absolute;
}
#box4 {
  background-image: -moz-image-rect(url(https://mdn.mozillademos.org/files/12053/firefox.png), 50%, 100%, 100%, 50%);
  width:133px;
  height:136px;
  position:absolute;
    </style>
   
</head>
<body>
<div id="container" onclick="rotate()">
  <div id="box1" style="left:0px;top:0px;">Top left</div>
  <div id="box2" style="left:133px;top:0px;">Top right</div>
  <div id="box3" style="left:0px;top:136px;">Bottom left</div>
  <div id="box4" style="left:133px;top:136px;">Bottom right</div>
</div>
    <script type="text/javascript">
function rotate() {
  var prevStyle = window.getComputedStyle(document.getElementById("box4"), null).getPropertyValue("background-image");
  
  // Now that we've saved the last one, start rotating
  
  for (var i=1; i<=4; i++) {
    var curId = "box" + i;
    
    // Shift the background images
    
    var curStyle = window.getComputedStyle(document.getElementById(curId), null).getPropertyValue("background-image");
    document.getElementById(curId).style.backgroundImage = prevStyle;
    prevStyle = curStyle;
  };
</script>
</body>
</html>