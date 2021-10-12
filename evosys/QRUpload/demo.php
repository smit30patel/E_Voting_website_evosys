<!doctype html>
<html>
    <head>
      <meta name="description" content="Voter Registration" />
      <meta name="keywords" content="qrcode,qr code,scanner,javascript" />
      <meta name="language" content="English" />
      <meta name="Revisit-After" content="1 Days"/>
      <meta name="robots" content="index, follow"/>
      <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <title>Voter's Registration</title>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../css/registerstyle.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="llqrcode.js"></script>
        <script type="text/javascript" src="webqr.js"></script>
    </head>
    
    <body>
	<div class="container-fluid" id="wrap">
	  <nav class="navbar navbar-default">
	    <div class="container">
	      <!-- Brand and toggle get grouped for better mobile display -->
	      <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
	        <a class="navbar-brand" href="http://localhost/evosys/index.html">EVoSys</a></div>
	      <!-- Collect the nav links, forms, and other content for toggling -->
	      <div class="collapse navbar-collapse" id="defaultNavbar1">
<ul class="nav navbar-nav navbar-right">
          <li><a href="http://localhost/evosys/about.html">About</a></li>
	          <li><a href="http://localhost/evosys/register.html">Register</a></li>
	          <li><a href="http://localhost/evosys/login.php">Login</a></li>
	          <li><a href="http://localhost/evosys/profile.php">Candidate Profiles</a></li>
	          <li><a href="http://localhost/evosys/statistics.php">Statistics</a></li>
	        </ul>
          </div>
	      <!-- /.navbar-collapse -->
        </div>
	    <!-- /.container-fluid -->
      </nav>
        
        <div id="main">
			<br><br>
            <form name="input" action="http://localhost/evosys/QRUpload/info.php" method="post">
                    
                <br>
				        <label for="uid"><b>Enter addhar uid</b></label><br>
				        <input type="number" placeholder="Addhar Uid" name="uid" id="uid" required><br>
                <label for="password"><b>Enter Password</b></label><br>
                <input type="password" placeholder="Enter Password" name="password" id="password" required>
                <br><br>
                <input type="submit" name="submit" id="submit" value="Submit" onclick="alert('Submission succesful')">
            </form>
        </div>
        <canvas id="qr-canvas" width="600" height="600"></canvas>
        
        <div id="decode">
			<script type="text/javascript">
            	load();
            </script>
            </div>
            </div>
    </body>
</html>