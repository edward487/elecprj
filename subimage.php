<html>

<head>

    <style type="text/css">
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.desc {
    padding: 15px;
    text-align: center;
}
    </style>
   
</head>
<body>
<h2>Dropdown Image</h2>
<p>Move the mouse over the image below to open the dropdown content.</p>

<div class="dropdown">
  <img src="img/nav-curriculum-01.svg" alt="Trolltunga Norway" width="100" height="50">
  <div class="dropdown-content">
    <a href="contact.php">
        <img src="img/nav-about-01.svg" alt="Trolltunga Norway" width="90" height="20">
    </a>
    <a href="index.php">
    <img src="img/nav-about-01.svg" alt="Trolltunga Norway" width="90" height="20">
    </a>
    <a href="about.php">
    <img src="img/nav-about-01.svg" alt="Trolltunga Norway" width="90" height="20">
    </a>
  </div>
</div>

</script>
    <script src="vendor/jquery/jquery.min.js"></script>
</body>
</html>