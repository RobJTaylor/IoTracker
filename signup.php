
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="This is the index page">
    <meta name="author" content="Rob's Cheesy Melts">
    <link rel="icon" href="../../favicon.ico">

    <title>IoTracker home page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	
    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand active" href="#">IoTracker</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
            <li class="active"><a class="navbar-brand" href="/home.php">Home</a></li>
            <li><a class="navbar-brand" href="/devices.php">Devices</a></li>
            <li><a class="navbar-brand" href="/about.php">About</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="hidden" placeholder="Email" class="form-control">
            </div>
            <button type="submit" class="btn btn-danger">Log Out</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Register</h1>
        <p>Fill out the form below to sign up for a IoTracker account!</p>
      </div>
    </div>

    <form class="form-horizontal">
        <div class="form-group">
            Name: <input type="text" name="forename" class="control-label">
            Email: <input type="text" name="email" class="control-label">
            Password: <input type="text" name="password" class="control-label">
            Confirm Password: <input type="text" name="confirmPassword" class="control-label">
            <input type="submit" class="control-label">
        </div>
    </form>

    <footer>
        <p>&copy; 2016 Company, Inc.</p>
    </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
