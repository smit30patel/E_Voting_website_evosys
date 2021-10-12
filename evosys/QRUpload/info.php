<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Final Registration</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">

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
	  
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$uid1 = $_REQUEST['uid'];
	$password1 = $_REQUEST['password'];
}
// create the connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "userdb";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Sorry! we failed to connect " .mysqli_connect_error());
}
else {
    echo "Success! connection was succesfull <br>";
}



$sql = "INSERT INTO `userinfo` (`UID`, `Password`) VALUES ('$uid1', '$password1')";
$reasult = mysqli_query($conn, $sql);

if($reasult){
    echo "Success! Object inserted succesfully ";
}
else{
    echo "Sorry! we can't insert object " .mysqli_error($conn);
}
?>

</body>
</html>