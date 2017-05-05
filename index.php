
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
        <h1>Welcome to IoTracker!</h1>
        <p>IoTracker is a simple and easy Internet Of Things (IoT) tracking software. IoTracker allows you
		to view your IoT devices data in an easy to read format wherever and whenever you need it.
		For more information on what IoTracker can do click the learn more button bellow!</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container index-device">
      <!-- Example row of columns -->
	  <div class="index-device-left">
		  <div class="row">
			<div class="col-md-9">
			  <h2>Device 1</h2>
			  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			  <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
			</div>
		  </div>
		  <div class="row">
			<div class="col-md-9">
			  <h2>Device 2</h2>
			  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			  <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
			</div>
		  </div>
		  <div class="row">
			<div class="col-md-9">
			  <h2>Device 3</h2>
			  <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			  <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
			</div>
		  </div>
	  </div>
	  <div class="col-sm-3 col-md-2 index-device-right">
	  <h2 class="header-device">Connected Devices</h2>
		  <div class="col-md-9">
			<h4>Smart Fridge 5000</h4>
			<p>This device has been connected for x hours</p>
			<hr>
			<h4>Rob's Cheesy Laptop</h4>
			<p>This device has been connected for x hours</p>
			<hr>
			<h4>Bike 'O Tron</h4>
			<p>This device has been connected for x hours</p>
			<hr>
			<h4>Super Ice Cream maker</h4>
			<p>This device has been connected for x hours</p>
			<hr>
			<h4>Smart Lights</h4>
			<p>This device has been connected for x hours</p>
		  </div>
	  </div>
    </div> <!-- /container -->
	<hr>

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
