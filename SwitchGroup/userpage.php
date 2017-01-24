<?php  
	require('config.php');
	if (isset($_POST['post'])) {
		$topic=$_POST['topic'];

		$sql= mysql_query ("INSERT INTO `topic` (`topic_subject`) VALUES ('$topic')");
		if ($sql) {
			echo "<script> alert('Topic has been posted successfully') </script>";
			header("location:userpage.php");
		}else{
			echo mysql_error();
		}

	}


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Bootstraps/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/new2.css">
</head>
<body>

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
				<span class=""><img src="img/FORUM (21).png" class="logo"></span></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->

			<ul class="nav navbar-nav navbar-right">
				<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- <span><i class="fa fa-bars"></i></span> --><img src="img/dami.jpg" class="img-responsive img-circle" width="50" height="40" alt="Image"></a>

						<ul class="dropdown-menu">
							<li><a href=""><span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span> Damilola</a></li>
							<li class="divider"></li>
							<li ><a href="" class=""><span><i class="fa fa-bell" aria-hidden="true"></i></span> Notification</a></li>
							<li class="divider"></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
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



	<div class="container-fluid">
		
		<div>
			<div class="navbar">
				<div class="container-fluid topnav1">
						
					<ul class="nav navbar-nav center">
						<li class="active">
							<a class="" href="userpage.php">Latest</a>
						</li>
						<li>
							<a href="userc.php">Categories</a>
						</li>	
					</ul>
				</div>
			</div>
		</div>

		<!--  -->

			<div class="navbar totop ">
				<div class="container-fluid topic" style="">
					<h5 class="navbar-brand to" href="#">Topic</h5>
					<ul class="nav navbar-nav pull-right ua">
						<li class="activ">
							<a href="#">user</a>
						</li>
						<li>
							<a >Activity</a>
						</li>
					</ul>
				</div>
			</div>
			<hr>

			<?php 

				$sql = "SELECT `topic_subject` FROM topic ORDER BY `topic_id` DESC ";
				$query = mysql_query($sql);

				if (mysql_num_rows($query)==0) {
					echo 'No Topics found in the database You can create one now!  <a href=""> New Topic</a>';
				}else{
				

					while ($row = mysql_fetch_assoc($query)) {	
				?>
					<div class="col-xs-6 col-sm-12 foru">
			<div class="container-flude">
				<div class="m6">
					<div class="col-sm-6">
						<span>
							<a href=""><h4> <?php echo $row['topic_subject']; ?> </h4></a>
						</span>
					</div>
					
					<div class="col-sm-6">
						<span class="uimg">
						
						<img src="img/dami.jpg" class="img-circle userim" alt="Image">
						</span>
						<span class="pull-right">
							<h5>3h</h5>
							<span>
								
							</span>
						</span>

					</div>
				</div>
				<hr>
			</div>
		</div>

					<?php
				}
			}
			?>
		
		
		
		<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a>
		<div class="modal fade" id="modal-topic">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">POST A TOPIC</h4>
					</div>
					<form action="" method="POST">
						<div class="modal-body">
							<span class="label"></span>
							<textarea name="topic" id="input" class="form-control" rows="3" required="required" placeholder="Shhhhh!!! Create your own topic "></textarea>
						</div>
						<div class="modal-footer">
							<center>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							<input type="submit" name="post" class="btn btn-default" VALUE="POST"></input>
							</center>
						</div>
					</form>
							</div>
			</div>
		</div>
</div>
<script src="Bootstraps/js/jquery-3.1.1.min.js"></script>

	<script src="Bootstraps/js/bootstrap.min.js"></script>
	<script src="js/buger.js"></script>
	<script type="text/javascript">
		
		function myReloader() {
			location.reload();
		}
	</script>
</body>
</html>