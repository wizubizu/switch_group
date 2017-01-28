<?php  
	require('config.php');
	include 'header1.php';
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
				<div class="container-fluid js">
						
					<ul class="nav navbar-nav center">
						<li>
							<a class="" href="indexn.php">Latest</a>
						</li>
						<li>
							<a href="noncat.php">Categories</a>
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
						<a href="noncatj1.php"><h4>Live search using Ajax isn’t working on Plunker!</h4></a>
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

		
</div>
<script src="Bootstraps/js/jquery-3.1.1.min.js"></script>

	<script src="Bootstraps/js/bootstrap.min.js"></script>
	<script src="js/buger.js"></script>
</body>
</html>