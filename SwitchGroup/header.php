<?php 
session_start();
		@$session_mail = $_SESSION['email'];
				@$session_id = $_SESSION['id'];
				// $session_lastname = $_SESSION['lastname'];


		// echo "<script> alert('welcome, $session_mail ')</script>";
		


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
				<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><div class="glyphicon glyphicon-user userim"></div></a>

						<ul class="dropdown-menu">
							<li><a href="" class=""><span><i class="fa fa-user" aria-hidden="true"></i></span> <?php if (isset( $session_mail )){
								echo $session_mail;
								}else{
									echo 'Anonymous';
									 } ?> </a></li>
							<li class="divider"></li>
							<li ><a href="" class=""><span><i class="fa fa-bell" aria-hidden="true"></i></span> Notification</a></li>
							<li class="divider"></li>
							<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>

						</ul>
					</li>
				</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#modal-topic" data-toggle="modal"><span><i class="fa fa-plus" aria-hidden="true"></i></span>New Topic</a></li>
	      				
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
