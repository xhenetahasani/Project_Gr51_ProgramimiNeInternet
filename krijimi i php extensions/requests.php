	
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manager Area | Requests</title>
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

.navbar-default .navbar-nav>li>a {
  color: #BDD4DE;
}

.navbar-default .navbar-nav>li>a:hover,
.navbar-default .navbar-nav>li>a:focus {
  color: #BDD4DE;
}

.navbar-default .navbar-nav>.active>a,
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
          <li><a href="overview.php">Dashboard</a></li>
          <li class="active"><a href="requests.html">Requests</a></li>
          <li><a href="tasks.php">Tasks</a></li>
          <li><a href="employees.php">Employees</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Welcome, Xheneta</a></li>
          <li><a href="login.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <header id="header">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Requests</h1>
        </div>
        <div class="col-md-2">
          <div class="dropdown create">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="true">
              Manage
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a type="button" data-toggle="modal" data-target="#addTask">Add Task</a></li>
              <li><a href="requests.php">See Requests</a></li>
              <li><a href="employees.php">Employee</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section id="breadcrumb">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="overview.php">Dashboard</a></li>
        <li class="active">Requests</li>
      </ol>
    </div>
  </section>

  <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <a href="overview.php" class="list-group-item active main-color-bg">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
            </a>
            <a href="requests.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt"
                aria-hidden="true"></span> Requests <span class="badge">12</span></a>
            <a href="tasks.php" class="list-group-item"><span class="glyphicon glyphicon-pencil"
                                                               aria-hidden="true"></span> Tasks <span class="badge">33</span></a>
            <a href="employees.php" class="list-group-item"><span class="glyphicon glyphicon-user"
                                                                   aria-hidden="true"></span> Employees <span class="badge">203</span></a>
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
          <!-- Pending Requests -->
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Pendding Requests</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                  <input class="form-control" type="text" placeholder="Filter Requests...">
                </div>
              </div>
              <br>
              <table class="table table-striped table-hover">
                <tr>
                  <th>Leave Form</th>
                  <th>Employee</th>
                  <th>Requested On</th>
                  <th>Title</th>
                  <th></th>
                </tr>
                <tr>
                  <td>Sick</td>
                  <td>Blet Beqa</td>
                  <td>Dec 12, 2016</td>
                  <td><a class="btn btn-default" href="#">View</a></td>
                  <td><a class="btn btn-success" href="#">Approve</a> <a class="btn btn-danger" href="#">Decline</a>
                  </td>
                </tr>
                <tr>
                  <td>Pregnancy Leave</td>
                  <td>Jehona K</td>
                  <td>Dec 13, 2016</td>
                  <td><a class="btn btn-default" href="#">View</a></td>
                  <td><a class="btn btn-success" href="#">Approve</a> <a class="btn btn-danger" href="#">Decline</a>
                  </td>
                </tr>
                <tr>
                  <td>Dead</td>
                  <td>Xheneta Hasani</td>
                  <td>Dec 13, 2016</td>
                  <td><a class="btn btn-default" href="#">View</a></td>
                  <td><a class="btn btn-success" href="#">Approve</a> <a class="btn btn-danger" href="#">Decline</a>
                  </td>
                </tr>
                <tr>
                  <td>Sick</td>
                  <td>Mali Retkoceri</td>
                  <td>Dec 14, 2016</td>
                  <td><a class="btn btn-default" href="#">View</a></td>
                  <td><a class="btn btn-success" href="#">Approve</a> <a class="btn btn-danger" href="#">Decline</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div>
            <!-- Approved Requests -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Approved Requests</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-12">
                    <input class="form-control" type="text" placeholder="Filter Requests...">
                  </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
                  <tr>
                    <th>Title</th>
                    <th>Employee</th>
                    <th>Requested On</th>
                    <th>Approved On</th>
                    <th>Leave Form</th>
                    <th></th>
                  </tr>
                  <tr>
                    <td>Sick</td>
                    <td>Blet Beqa</td>
                    <td>Dec 12, 2016</td>
                    <td>Dec 12, 2016</td>
                    <td><a class="btn btn-default" href="#">View</a></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Pregnancy Leave</td>
                    <td>Genta Limani</td>
                    <td>Dec 13, 2016</td>
                    <td>Dec 12, 2016</td>
                    <td><a class="btn btn-default" href="#">View</a></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Dead</td>
                    <td></td>
                    <td>Dec 13, 2016</td>
                    <td>Dec 12, 2016</td>
                    <td><a class="btn btn-default" href="#">View</a></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Pregnancy Leave</td>
                    <td>Genta Limani</td>
                    <td>Dec 14, 2016</td>
                    <td>Dec 12, 2016</td>
                    <td><a class="btn btn-default" href="#">View</a></td>
                    <td></td>
                  </tr>
                </table>
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

  <!-- Add Task -->
  <div class="modal fade" id="addTask" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Task</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Task Title</label>
              <input type="text" class="form-control" placeholder="Task Title">
            </div>
            <div class="form-group">
              <label>Task Body</label>
              <textarea name="editor1" class="form-control" placeholder="Task Body"></textarea>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Published
              </label>
            </div>
            <div class="form-group">
              <label>Due Date</label>
              <input type="text" class="form-control" placeholder="Add a time penalty...">
            </div>
            <div class="form-group">
              <label>Task Budget</label>
              <input type="text" class="form-control" placeholder="Add task budget...">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    CKEDITOR.replace('editor1');
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html> 





	