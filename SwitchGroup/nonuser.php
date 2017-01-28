	<?php  
	require('config.php');
	include 'header1.php';


	$_SESSION['topic_subject'];
		$_SESSION['topic_body'];//if is not displaying the var dump let u to no mayb it displing or not

		$getSubject = $_SESSION['topic_subject'];
		$getBody = $_SESSION['topic_body'];
		// $getUsername = $_SESSION['username'];


	if (isset($_POST['post'])) {
		$topic= $_POST['topic'];
		$time_posted = $_POST['time_posted'];


		$sql= mysql_query ("INSERT INTO `topic` (`topic_subject`, `time_posted`) VALUES ('$topic', '$time_posted')");
		if ($sql) {
			echo "<script> alert('Topic has been posted successfully') </script>";
			// header("location:indexn.php");
		}else{
			echo mysql_error();
		}

	}

?>

<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-6">
			<div class="navbar">
				<div class="container-fluid topnav1">
						
					<ul class="nav navbar-nav center">

						<li class="active">
							<a class="" href="indexn.php">Latest</a>
						</li>
						<li>
							<a href="noncat.php">Categories</a>
						</li>
						
					</ul>
				</div>
			</div>
		</div>

		<!--  -->

		<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-md-6 cat">
				
					<span>
						<h2><?php echo $getSubject; ?></h2>
						<!-- <h4><b><a href="#" class="jb">Jobs</a></b></h4> -->
					</span>

					<span>
						<div class="glyphicon glyphicon-user userim"></div> Toba Akinlade.
					</span>
					<span>
						<h3 class="" style="padding-left: 63px;"><?php echo $getBody; ?></h3>
					</span>
						<br><br>
						<hr>

				<span>
					<div class="glyphicon glyphicon-user userim"></div> Nuru_den.
				</span>
				<span>
					<p class="" style="padding-left: 63px;">Wait. You're not a developer?

					The subject makes it sound like you want to hire a developer but then the content suggests that you're a developer who just needs some assistance with a small task.

					I think you would do good to be a little more detailed in the body of the post.</p>
				</span>
				<br><br>
				<hr>

				<span>
					<div class="glyphicon glyphicon-user userim"></div> Toba Akinlade.
				</span>
				<span>
					<p class="" style="padding-left: 63px;">@Nuru_den Thanks for your input, yes you are correct. I've edited my post</p>
				</span>
				<br><br>
				<hr>
				
				<div>
					
			</div>


		

	<script src="Bootstraps/js/jquery-3.1.1.min.js"></script>

	<script src="Bootstraps/js/bootstrap.min.js"></script>
</body>
</html>