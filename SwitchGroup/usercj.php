<?php  
	require('config.php');
	include 'header.php';
	if (isset($_POST['post'])) {
		$topic= $_POST['topic'];
		$time_posted = $_POST['time_posted'];


		$sql= mysql_query ("INSERT INTO `topic` (`topic_subject`, `time_posted`) VALUES ('$topic', '$time_posted')");
		if ($sql) {
			echo "<script> alert('Topic has been posted successfully') </script>";
			header("location:userpage.php");
		}else{
			echo mysql_error();
		}

	}

?>

<div class="container">
	<div class="row">
		<div class=" col-md-12 col-sm-6">
			<div class="navbar">
				<div class="container-fluid js">
						
					<ul class="nav navbar-nav center">
						<li>
							<a class="" href="userpage.php">Latest</a>
						</li>
						<li>
							<a href="userc.php">Categories</a>
						</li>
						<li class="active">
							<a href="#">JavaScript</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
			</div>
			
		</div>

<!-- row user/landind -->
		<div class="row userland">
			<div class="col-md-12 col-sm-6 ">
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
						<p>time Posted</p>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<a href="usercj1.php"><h4>Live search using Ajax isn’t working on Plunker!</h4></a>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span class="">
						<div class="glyphicon glyphicon-user userim"></div>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<h5>8m</h5>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Pass a parameter from client-side to server side and get result</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span class="">
						<div class="glyphicon glyphicon-user userim"></div>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<p>30m</p>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Javascript latest or not, new and old?</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span class="">
						<div class="glyphicon glyphicon-user userim"></div>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<p>3h</p>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Ajax file upload not being store in the directory</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<span class="">
						<div class="glyphicon glyphicon-user userim"></div>
						</span>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<p>1h</p>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Functional Programming and more</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<div class="glyphicon glyphicon-user userim"></div>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<h5>3h</h5>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Application/JSON+ becomes Application/JSON&#43;</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<div class="glyphicon glyphicon-user userim"></div>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<h5>2d</h5>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Javascript getAttribute not working?</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<div class="glyphicon glyphicon-user userim"></div>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<h5>5d</h5>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Can I add “add table row” to this jquery row drag, drop and delete?</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<div class="glyphicon glyphicon-user userim"></div>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<h5>7d</h5>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Javascript code not running</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<div class="glyphicon glyphicon-user userim"></div>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<h5>7d</h5>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Converting for loop to foreach loop</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<div class="glyphicon glyphicon-user userim"></div>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<h5>8d</h5>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Lightbox script: Can’t figure out what I’m getting wrong</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<div class="glyphicon glyphicon-user userim"></div>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<h5>5d</h5>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Ajax file upload not being store in the directory</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<span class="">
						<div class="glyphicon glyphicon-user userim"></div>
						</span>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<p>1h</p>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Functional Programming and more</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<div class="glyphicon glyphicon-user userim"></div>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<h5>3h</h5>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Application/JSON+ becomes Application/JSON&#43;</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<div class="glyphicon glyphicon-user userim"></div>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<h5>2d</h5>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Ajax file upload not being store in the directory</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<span class="">
						<div class="glyphicon glyphicon-user userim"></div>
						</span>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<p>1h</p>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Functional Programming and more</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<div class="glyphicon glyphicon-user userim"></div>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<h5>3h</h5>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Application/JSON+ becomes Application/JSON&#43;</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<div class="glyphicon glyphicon-user userim"></div>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<h5>2d</h5>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Ajax file upload not being store in the directory</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<span class="">
						<div class="glyphicon glyphicon-user userim"></div>
						</span>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<p>1h</p>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Functional Programming and more</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<div class="glyphicon glyphicon-user userim"></div>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<h5>3h</h5>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Application/JSON+ becomes Application/JSON&#43;</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<div class="glyphicon glyphicon-user userim"></div>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<h5>2d</h5>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Ajax file upload not being store in the directory</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<span class="">
						<div class="glyphicon glyphicon-user userim"></div>
						</span>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<p>1h</p>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Functional Programming and more</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<div class="glyphicon glyphicon-user userim"></div>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<h5>3h</h5>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>

			<div class="col-md-12 col-sm-6 ">
				<div class="col-md-8 userlandtopic">
					<span>
						<h4>Application/JSON+ becomes Application/JSON&#43;</h4>
					</span>
				</div>
				<div class="col-md-3 userlandimg">
					<span>
						<div class="glyphicon glyphicon-user userim"></div>
					</span>
				</div>
				<div class="col-md-1 userlandtp">
					<span>
						<h5>2d</h5>
					</span>
				</div>
			</div>
			<div class="row">
				<hr class="hr">
			</div>



		</div>

</div>
	




		<!-- modal begin -->


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
			
		
</div>			

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

</body>
</html>