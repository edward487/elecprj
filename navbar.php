    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/navbar.css">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/navbar.js"></script>
<!-- Fixed navbar -->
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
            <li><a href="about.php">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#trends">Trends</a></li>
            <li><a href="#faculty">Faculty</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Curriculum<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="cur-first-year.php">First Year</a></li>
                <li><a href="#">Second Year</a></li>
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
    </nav>