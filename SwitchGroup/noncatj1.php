<?php  
	require('config.php');
	include 'header1.php';
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
		<div col-md-12>
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


		<div class="row userland">
			<div class="col-md-12">
				<span>
					<h1>Live search using Ajax isn’t working on Plunker!</h1>
					<h4><b class="js">JavaScrpt</b></h4>
				</span>
					<hr>
				<span>
					<div class="glyphicon glyphicon-user userim"></div> Toba Akinlade.
				</span>
				<span>
					<p class="" style="padding-left: 63px;">Hi,

						I'm trying to test a live search using JSON and Ajax on Plunker.
						However the code doesn't work!
						Is anything wrong with my code or Plunker isn't able to handle Ajax requests?

						Here is my example
						<a href="http://plnkr.co/edit/ZkXMcRsHCuYg4axN5DL8?p=preview1">http://plnkr.co/edit/ZkXMcRsHCuYg4axN5DL8?p=preview1 </a>

						Thanks
					</p>
					
				</span>
				<span>
					
				</span>
					<!-- Comment start -->
					<!-- <div class="row commr">
						<div class="col-md-12">
							<form method="POST" action="">
								<textarea name="comment" id="" class="form-control comm" rows="4" value="" ></textarea>
								<input type="text" name="comment_date" class="posted_time" value="<?php echo date("d.m.y:ha")?>"><br>
								<span><input type="submit" name="post_comment" class="btn btn-default commbu"></input></span>
							</form>
						</div>
					</div> -->
					<!-- comment end -->
					
				<hr>
				<span>
					<div class="glyphicon glyphicon-user userim"></div> Toba Akinlade.
				</span>
				<span>
					<p class="" style="padding-left: 63px;">Hi,

						I'm trying to test a live search using JSON and Ajax on Plunker.
						However the code doesn't work!
						Is anything wrong with my code or Plunker isn't able to handle Ajax requests?

						Here is my example
						<a href="http://plnkr.co/edit/ZkXMcRsHCuYg4axN5DL8?p=preview1">http://plnkr.co/edit/ZkXMcRsHCuYg4axN5DL8?p=preview1 </a>

						Thanks
					</p>
				</span>
				<hr>
			<div>
		</div>

		<?php
						$sql  = "SELECT * FROM comment";
						$query = mysql_query($sql);

						if (mysql_num_rows($query) <= 0) {
							echo 'No Comment found for this post yet';
						}else{
							
							while ($result = mysql_fetch_array($query)) { 
								
							?>
								
								<div class="all_comment">
									<span>
										<h4><?php echo $result['user_id']." : ". $result['body'] ." @ ". $result['user_time'];?></h4>
									</span>
								</div>
												
								<?php
											}
											} 
							?>
							<br> 
							<button id="view_comment" type="button" class="btn btn-default glyphicon glyphicon-eye-open "> View Comments</button> 
		
</div>



<!-- modal -->
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
// $(".all_comment").hide();
$("#view_comment").click(function (){
	$(".all_comment").toggle();
	// $(this).html(' Hide Comment');
});

$(".topic_content").on('click', function() {
	var result = $(this).text();
	
	$("#user_topics").text("Topic :"+ result) +"<br>";
});

	</script>

</body>
</html>