<?php // session_start();
	require('config.php');
	include 'header.php';
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
			// header("location:userpage.php");
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

		<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-md-6 cat">
				
					<span>
						<h2><?php echo $getSubject; ?></h2>
						<!-- <h4><b><a href="#" class="jb">Jobs</a></b></h4> -->
					</span>
					<span>
						<div class="glyphicon glyphicon-user userim"></div> <?php// echo $getUsername; ?>
					</span>
					<span>
						<h3 class="" style="padding-left: 63px;"><?php echo $getBody; ?></h3>
					</span>
						
					<!-- Comment start -->
					<div class="row commr">
						<div class="col-md-12">
							<form method="POST" action="">
								<textarea name="comment" id="" class="form-control comm" rows="4" value="" ></textarea>
								<input type="text" name="comment_date" class="posted_time" value="<?php echo date("d.m.y:ha")?>"><br>
								<span><input type="submit" name="post_comment" class="btn btn-default commbu" value="Comment"></input></span>
							</form>
						</div>
					</div><br>
					<!-- comment end -->
					
				
				
				<hr>

				<span>
					<div class="glyphicon glyphicon-user userim"></div> Nuru_den.
				</span>
				<span>
					<p class="" style="padding-left: 63px;">Wait. You're not a developer?

					The subject makes it sound like you want to hire a developer but then the content suggests that you're a developer who just needs some assistance with a small task.

					I think you would do good to be a little more detailed in the body of the post.</p><br>
					
				</span>
				<span>
					<div class="glyphicon glyphicon-user userim"></div> Toba Akinlade.
				</span>
				<span>
					<p class="" style="padding-left: 63px;">@Nuru_den Thanks for your input, yes you are correct. I've edited my post</p><br>
					<div class=""><span><i class="fa fa-reply fa-2x" style="margin-left: 80px;" aria-hidden="true"></i></span></div>
					
				</span>
				<hr><br>

				<span>
					<div class="glyphicon glyphicon-user userim"></div> Nuru_den.
				</span>
				<span>
					<p class="" style="padding-left: 63px;">Wait. You're not a developer?

					The subject makes it sound like you want to hire a developer but then the content suggests that you're a developer who just needs some assistance with a small task.

					I think you would do good to be a little more detailed in the body of the post.</p><br>
					<div class=""><span><i class="fa fa-reply fa-2x" style="margin-left: 80px;" aria-hidden="true"></i></span></div>
				</span><br><br>


				<!-- modal start here -->

			<div class="modal fade" id="modal-topic">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">POST A TOPIC</h4>
							</div>
							<form action="" method="POST">
								<div class="modal-body">
								<input type="text" name="topic" class="form-control" placeholder="Subject"  ><br>
									<span class="label"></span>
									<textarea name="body" id="input" class="form-control" rows="20" placeholder="Shhhhh!!! Create your own topic "></textarea>
									<input type="text" name="time_posted" class="posted_time" VALUE=" <?php  echo date(" d/m/y ha");?> " </div> </input>
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
				<!-- end here -->

	</div>
		
			

		<script src="Bootstraps/js/jquery-3.1.1.min.js"></script>

	<script src="Bootstraps/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		
	
$(".topic_content").on('click', function() {
	var result = $(this).text();
	
	$("#user_topics").text("Topic :"+ result) +"<br>";
});

	</script>
	
</body>
</html>