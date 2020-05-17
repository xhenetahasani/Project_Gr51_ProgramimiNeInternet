<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manager Area | Posts</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
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
        <a class="navbar-brand" href="#">ProgramimiNeInternet</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="e_dashboard.php">Dashboard</a></li>
          <li><a href="e_requests.php">Requests</a></li>
          <li class="active"><a href="e_tasks.php">Tasks</a></li>
          <li><a href="e_profile.php">Profile</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Welcome, Brad</a></li>
          <li><a href="e_login.php">Logout</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>
  <header id="header">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Tasks</h1>
        </div>
        <div class="col-md-2">
          <div class="dropdown create">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="true">
              Manage
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a type="button" data-toggle="modal" data-target="#makeRequest">Make Request</a></li>
              <li><a href="#">See Requests</a></li>
              <li><a href="#">Add Employee</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section id="breadcrumb">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="e_dashboard.php">Dashboard</a></li>
        <li class="active">Tasks</li>
      </ol>
    </div>
  </section>
  <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <a href="e_dashboard.php" class="list-group-item active main-color-bg">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
            </a>
            <a href="e_requests.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt"
                                                                   aria-hidden="true"></span> Request <span class="badge">12</span></a>
            <a href="e_tasks.php" class="list-group-item"><span class="glyphicon glyphicon-pencil"
                                                                aria-hidden="true"></span> Tasks <span class="badge">33</span></a>
            <a href="e_profile.php" class="list-group-item"><span class="glyphicon glyphicon-user"
                                                                  aria-hidden="true"></span> Profile <span class="badge">203</span></a>
          </div>
          <div class="well">
            <h4>Hours Worked</h4>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                style="width: 60%;">
                60%
              </div>
            </div>
            <h4>Resources Used </h4>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                style="width: 40%;">
                40%
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <!-- To Be Completed-->
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">To be completed Tasks</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                  <input class="form-control" type="text" placeholder="Filter Tasks...">
                </div>
              </div>
              <br>
              <table class="table table-striped table-hover">
                <tr>
                  <th>Title</th>
                  <th>Due Date</th>
                  <th>Created On</th>
                  <th>Bonuses</th>
                  <th></th>
                </tr>
                <tr>
                  <td>Adult</td>
                  <td></td>
                  <td>Dec 12, 2016</td>
                  <td>100</td>
                  <td><a class="btn btn-primary" href="#">Take It</a></td>
                </tr>
                <tr>
                  <td>Child</td>
                  <td></td>
                  <td>Dec 13, 2016</td>
                  <td>30</td>
                  <td><a class="btn btn-primary" href="#">Take It</a></td>
                </tr>
                <tr>
                  <td>Child</td>
                  <td></td>
                  <td>Dec 13, 2016</td>
                  <td>30</td>
                  <td><a class="btn btn-primary" href="#">Take It</a></td>
                </tr>
                <tr>
                  <td>Adult</td>
                  <td></td>
                  <td>Dec 14, 2016</td>
                  <td>30</td>
                  <td><a class="btn btn-primary" href="#">Take It</a></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <!-- Completed Tasks -->
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Completed Tasks</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                  <input class="form-control" type="text" placeholder="Filter Tasks...">
                </div>
              </div>
              <br>
              <table class="table table-striped table-hover">
                <tr>
                  <th>Task Title</th>
                  <th>Bonuses</th>
                  <th>Created On</th>
                  <th>Task Description</th>
                  <th></th>
                </tr>
                <tr>
                  <td>Adult</td>
                  <td></td>
                  <td>Dec 12, 2016</td>
                  <td></td>
                  <td><a class="btn btn-default" href="#">Edit</a> <a class="btn btn-danger" href="#">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>Adult</td>
                  <td></td>
                  <td>Dec 13, 2016</td>
                  <td></td>
                  <td><a class="btn btn-default" href="#">Edit</a> <a class="btn btn-danger" href="#">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>Child</td>
                  <td></span></td>
                  <td>Dec 13, 2016</td>
                  <td></td>
                  <td><a class="btn btn-default" href="#">Edit</a> <a class="btn btn-danger" href="#">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>Child</td>
                  <td></td>
                  <td>Dec 14, 2016</td>
                  <td></td>
                  <td><a class="btn btn-default" href="#">Edit</a> <a class="btn btn-danger" href="#">Delete</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <footer id="footer">
    <p>Copyright ProgramimiNeInternet, &copy; 2020</p>
  </footer>
  <!-- Modals -->
  <!-- Make a Leave Request -->
  <div class="modal fade" id="makeRequest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Leave Request</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <div class="form-group">
                <label for="sel1">Request Leave</label>
                <select class="form-control" id="sel1">
                  <option>Sick</option>
                  <option>Dead</option>
                  <option>Pregnancy Leave</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label>Upload your documentation</label>
            </div>
            <div class="form-group">
              <label class="btn btn-default">
                Browse <input type="file" hidden>
              </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Urgent
              </label>
            </div>
            <div class="form-group">
              <label>Start Date</label>
              <input type="date" class="form-control">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    CKEDITOR.replace('editor1');
  </script>
  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>

