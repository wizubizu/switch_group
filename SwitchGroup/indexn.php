<?php  
	require('config.php');
	include 'header1.php';
	if (isset($_POST['post'])) {
		$topic= $_POST['topic'];
		$time_posted = $_POST['time_posted'];
		$body = $_POST['body'];


		$sql= mysql_query ("INSERT INTO `topic` (`topic_subject`, `time_posted`, `topic_body`) VALUES ('$topic', '$time_posted', '$body')");
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
		<div class="col-md-12 col-md-6">
			<div class="navbar">
				<div class="container-fluid js">
						
					<ul class="nav navbar-nav center">
						<li>
							<a class="active" href="indexn.php">Latest</a>
						</li>
						<li class="">
							<a href="noncat.php">Categories</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

<!-- row user/landind -->
		<div class="row userland">
			<div class="col-md-12 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<p>Topic</p>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<p>User</p>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<p>Time Posted</p>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>
		</div>



			<?php 

				$sql = "SELECT * FROM topic ORDER BY `topic_id` DESC ";
					$query = mysql_query($sql);

						if (mysql_num_rows($query)==0) {
								echo 'No Topics found in the database You can create one now!  <a href=""> New Topic</a>';
							}else{
							

							while ($row = mysql_fetch_assoc($query)) {	
									// $x= $row['topic_subject'];
								$_SESSION['topic_body'] = $row['topic_body'];
								
									$_SESSION['topic_subject']= $row['topic_subject'];
						?>


		<div class="row userland">
			<div class="col-md-12 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<a href="nonuser.php" class="topic_content" ><h4 class="posted"> <?php echo $row['topic_subject'];   ?> </h4></a>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<div class="glyphicon glyphicon-user userim"></div>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						 <?php echo $row['time_posted'] ; ?> 
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>
		</div>

		<!-- end of php -->

		<?php
			}
			}
		?>


	<!-- 	<div class="modal fade" id="modal-topic">
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
			 -->
		
				

	<script src="Bootstraps/js/jquery-3.1.1.min.js"></script>

	<script src="Bootstraps/js/bootstrap.min.js"></script>
	
		<script type="text/javascript">
		
	
// $('#topic_content').click(function(){
// alert($(this).attr('href'));
//  });

		// var each_topic = document.getElementById('topic_content').sometext;
		// // document.getElementById('user_topics').innerHTML = each_topic;

		// document.getElementById("user_topics").text('user_topics');

$(".topic_content").on('click', function() {
	var result = $(this).text();
	
	$("#user_topics").text("Topic :"+ result) +"<br>";
});

	</script>