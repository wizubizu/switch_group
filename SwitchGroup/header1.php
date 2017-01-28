<?php  
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Bootstraps/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/anoda.css">
</head>
<body>


<div class="container">
	<nav class="navbar navbar-inverse headbar " role="navigation">
		<div class="container-fluid topnav ">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
				<span class=""><img src="img/flogo.png" class="logo"></span></a>
			</div>


			<!-- Collect the nav links, forms, and other content for toggling -->

			<ul class="nav navbar-nav navbar-right">
				
					
					<ul class="nav navbar-nav navbar-right">
						<li><a href="login.php" data-toggle=""><span><i class="fa fa-plus" aria-hidden="true"></i></span>New Topic</a></li>
	      				<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
					</ul>
				</li>
				
				<form class="navbar-form navbar-right search" role="search">
					<div class="input-group inp">
						<input type="text" class="form-control" placeholder="Search">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit">
								<i class="glyphicon glyphicon-search"></i>
							</button>
						</div>
					</div>
				</form>

				
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	

</div>
