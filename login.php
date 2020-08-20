<!DOCTYPE html>
<html>
<head>
	<title>login page</title>

</head>
<body>

</body>
</!DOCTYPE html>
<html>
<head>
	<title>login page</title>

	<!-- w3 school navbar right aligned-->
	 <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	<link rel="stylesheet" type="text/css" href="loginstyle.css">

</head>
<body>
		<!--navbar-->
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">FoodCorner</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="#">Home</a></li>
		      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Food Menu <span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="#">Chinese</a></li>
		          <li><a href="#">Italian</a></li>
		          <li><a href="#">South-Indian</a></li>
		        </ul>
		      </li>
		      <li><a href="#">Carrers</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		    </ul>
		  </div>
		</nav>
		<!--login-->
		
			<div class="div1">
	       	 <center><h1>Login Here</h1></center>
	        <form action="validation.php" method="post">
	            <p>Username</p>
	            <input type="text" name="username" placeholder="Enter Username">
	            <p>Password</p>
	            <input type="password" name="password" placeholder="Enter Password"><br><br>
	            <center><input type="submit" name="" value="Login"></center>
	          
	        </form>
	       </div>
	        <!--signup-->
	   		 <div class="div2">
	       	 <center><h1>SignUP here</h1></center>
	        <form action="registration.php" method="post">
	            <p>Username</p>
	            <input type="text" name="username" placeholder="Enter Username">
	            <p>Password</p>
	            <input type="password" name="password" placeholder="Enter Password"><br><br>
	            <center><input type="submit" name="" value="Signup"></center>
	          
	        </form>
	       </div>
	   
</body>
</html>