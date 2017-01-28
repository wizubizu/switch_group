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
				<div class="container-fluid topnav1">
						
					<ul class="nav navbar-nav center">
						<li>
							<a class="" href="indexn.php">Latest</a>
						</li>
						<li class="active">
							<a href="noncat.php">Categories</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>


	
	<div class="row userland">
		<div class="col-md-12 col-sm-6">
			<div class="col-md-6">
				<div class="col-md-6">category</div>
				<div class="col-md-6 cattopic">Topic</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6">Latest view</div>
					<div class="col-md-6 catactive">Active</div>
			</div>
		</div>
		<hr class="" style="width: 225px;   padding-left: 691px;">
	</div>

		<div class="row userland">
			<div class="col-md-12 col-sm-6">
				<div class="col-md-6">
					<div class="col-md-6">
						<li ><h4><a href="noncatj.php" class="js"><b>JavaScript</b></a></h4></li>

						<span class="p"><p>The world's most ubiquitous computing runtime, used for everything from client-side scripting to multi-threaded, server-based apps. Learn how to use the language plus the numerous libraries and frameworks that are based upon it.</p></span>
					</div>
					<div class="col-md-6 cattopic">
						<h5>100</h5>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6 catimg ">
						<span>
							<div class="glyphicon glyphicon-user userim"></div>Fredly.
						</span>
						<span><p>Phpmailer vs Swiftmailer?</p></span>
					</div>
					<div class="col-md-6 catactive">
						<span class="">
							<h5>1h</h5>
						</span>
					</div>
				</div>
			</div>
			<hr class="pull-left" style=" width: 46px;  padding-left:363px;">
		</div>


		<div class="row userland">
			<div class="col-md-12 col-sm-6">
				<div class="col-md-6">
					<div class="col-md-6">
						<li ><h4><a href="#" class="hc"><b>HTML&CSS</b></a></h4></li>

						<span class="p"><p>Questions relating to page structure and layout—from HTML5 and the proper use of elements to styling issues, browser bugs, media queries and responsive design.</p></span>
					</div>
					<div class="col-md-6 cattopic">
						<h5>99</h5>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6 catimg">
						<span>
							<div class="glyphicon glyphicon-user userim"></div>Tony_ju.
						</span>
						<span class=""><p>Weird response from normal SQL query</p></span>
						<span><p>Ajax file upload not being store in the directory</p>
						</span>
					</div>
					<div class="col-md-6 catactive">
						<span class="">
							<h5>2h</h5>
						</span>
					</div>
				</div>
			</div>
			<hr class="pull-left" style=" width: 46px;  padding-left:363px;">
		</div>

		<div class="row userland">
			<div class="col-md-12 col-sm-6">
				<div class="col-md-6">
					<div class="col-md-6">
						<li ><h4><a href="#" class="ph"><b>PHP</b></a></h4></li>

						<span class="p"><p>PHP has established itself as the Open Source programming language of choice for many developers. Need help with your program? Trying to fix a tricky parse error?</p></span>
					</div>
					<div class="col-md-6 cattopic">
						<h5>112</h5>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6 catimg">
						<span>
							<div class="glyphicon glyphicon-user userim"></div> Kolade.
							</span>
							<span><p>Ajax file upload not being store in the directory</p></span>
							<span><p>Php mysql question</p></span>
					</div>
					<div class="col-md-6 catactive">
						<span class="">
							<h5>4h</h5>
						</span>
					</div>
				</div>
			</div>
			<hr class="pull-left" style=" width: 46px;  padding-left:363px;">
		</div>

		<div class="row userland">
			<div class="col-md-12 col-sm-6">
				<div class="col-md-6">
					<div class="col-md-6">
						<li ><h4><a href="#" class="rb"><b>Ruby</b></a></h4></li>

						<span class="p"><p>Get up to speed with this Object Oriented scripting language, find out which gem does what and learn about the full-stack framework that's provided by Rails.</p></span>
					</div>
					<div class="col-md-6 cattopic">
						<h5>10</h5>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6 catimg">
						<span>
							<div class="glyphicon glyphicon-user userim"></div>
							</span>
							<span><p>Using a CRON job to query a database and email the results</p></span>
					</div>
					<div class="col-md-6 catactive">
						<span class="">
							<h5>10h</h5>
						</span>
					</div>
				</div>
			</div>
			<hr class="pull-left" style=" width: 46px;  padding-left:363px;">
		</div>

		<div class="row userland">
			<div class="col-md-12 col-sm-6">
				<div class="col-md-6">
					<div class="col-md-6">
						<li ><h4><a href="#" class="de"><b>Design</b></a></h4></li>

						<span class="p"><p>Discuss issues to do with general web design, graphic design, graphics, UI, UX and other front-end related technologies that don't have a specific category of their own.</p></span>
					</div>
					<div class="col-md-6 cattopic">
						<h5>13</h5>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6 catimg">
						<span>
							<div class="glyphicon glyphicon-user userim"></div>
							</span>
							<span><p>MSSQL : Order By specific column in specific order</p></span>
					</div>
					<div class="col-md-6 catactive">
						<span class="">
							<h5>7h</h5>
						</span>
					</div>
				</div>
			</div>
			<hr class="pull-left" style=" width: 46px;  padding-left:363px;">
		</div>

		<div class="row userland">
			<div class="col-md-12 col-sm-6">
				<div class="col-md-6">
					<div class="col-md-6">
						<li ><h4><a href="#" class="mk"><b>Marketing</b></a></h4></li>

						<span class="p"><p>Discuss everything from viral marketing to offline branding and promotion. Learn how to target your efforts to get the best return on your investment, whether it be through SEO, affiliate marketing etc.</p></span>
					</div>
					<div class="col-md-6 cattopic">
						<h5>13</h5>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6 catimg">
						<span>
							<div class="glyphicon glyphicon-user userim"></div>
							</span>
							<span><p>How to improve keyword rankings?</p></span>
							<span><p>What is difference between Branding and promotion?</p></span>
					</div>
					<div class="col-md-6 catactive">
						<span class="">
							<h5>7h</h5>
						</span>
					</div>
				</div>
			</div>
			<hr class="pull-left" style=" width: 46px;  padding-left:363px;">
		</div>
</div>	
	

		

	<script src="Bootstraps/js/jquery-3.1.1.min.js"></script>

	<script src="Bootstraps/js/bootstrap.min.js"></script>
</body>
</html>