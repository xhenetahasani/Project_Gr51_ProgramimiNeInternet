<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Employee Area | Account Login</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  <style>
  
  
	body {
  background: #EFEFEF;
}

/* Navbar */
.navbar {
  min-height: 33px !important;
  margin-bottom: 0;
  border-radius: 0;
}

.navbar-nav>li>a,
.navbar-brand {
  padding-top: 6px !important;
  padding-bottom: 0 !important;
  height: 33px;
}

.navbar-default {
  background-color: #2B3A42;
  border-color: #3F5765;
}

.navbar-default .navbar-brand {
  color: #BDD4DE;
}

.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #BDD4DE;
}

.navbar-default .navbar-text {
  color: #BDD4DE;
}
navbar-default .navbar-nav>.active>a,
.navbar-default .navbar-nav>.active>a:hover,
.navbar-default .navbar-nav>.active>a:focus {
  color: #BDD4DE;
  background-color: #3F5765;
}

.navbar-default .navbar-nav>.open>a,
.navbar-default .navbar-nav>.open>a:hover,
.navbar-default .navbar-nav>.open>a:focus {
  color: #BDD4DE;
  background-color: #3F5765;
}

  
.navbar-default .navbar-nav>.open>a,
.navbar-default .navbar-nav>.open>a:hover,
.navbar-default .navbar-nav>.open>a:focus {
  color: #BDD4DE;
  background-color: #3F5765;
}

.navbar-default .navbar-toggle {
  border-color: #3F5765;
}

.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #3F5765;
}

.navbar-default .navbar-toggle .icon-bar {
  background-color: #BDD4DE;
}

.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #BDD4DE;
}

.navbar-default .navbar-link {
  color: #BDD4DE;
}

.navbar-default .navbar-link:hover {
  color: #BDD4DE;
}

/* Custom */
.main-color-bg {
  background-color: #3F5765 !important;
  border-color: #3F5765 !important;
  color: #ffffff !important;
}

/* Header */
#header {
  background: #3F5765;
  color: #ffffff;
  padding-bottom: 10px;
  margin-bottom: 15px;
}

#header .create {
  padding-top: 20px;
}

/* Breadcrumb */
.breadcrumb {
  background: #cccccc;
  color: #3F5765;
}

.breadcrumb a {
  color: #3F5765;
}

/* Progress Bars */
.progress-bar {
  background: #3F5765;
  color: #ffffff;
}

.dash-box {
  text-align: center;
}

#login {
  margin-top: 30px;
}

/* Footer */
#footer {
  background: #3F5765;
  color: #ffffff;
  text-align: center;
  padding: 30px;
  margin-top: 30px;
}


@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu>li>a {
    color: #BDD4DE;
  }

  .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus {
    color: #BDD4DE;
  }

  .navbar-default .navbar-nav .open .dropdown-menu>.active>a,
  .navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus {
    color: #BDD4DE;
    background-color: #3F5765;
  }
} 
   
  </style>
</head>

<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
          aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Employee</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse"></div>
    </div>
  </nav>
  <header id="header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">
            Employee Area <small>Account Login</small>
          </h1>
        </div>
      </div>
    </div>
  </header>
  <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <form id="login" action="e_dashboard.php" class="well">
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" placeholder="Enter Username" />
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password" />
            </div>
            <button type="submit" class="btn btn-default btn-block">
              Login
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <footer id="footer">
    <p>Copyright ProgramimiNeInternet, &copy; 2020</p>
  </footer>
  <script>
    CKEDITOR.replace("editor1");
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>


