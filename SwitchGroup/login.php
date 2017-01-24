<?php
//for sign up 

require ('config.php');
if (isset($_POST['submit'])) {
	$Fname=$_POST['fname'];
	$Lname=$_POST['lname'];
	$Email=$_POST['email'];
	$Password=$_POST['password'];
	$Password2=$_POST['pass_check'];

	if ($Password == $Password2) {
		$Fname=mysql_escape_string($Fname);
		$Lname=mysql_escape_string($Lname);
		$Email=mysql_escape_string($Email);
		$Password=mysql_escape_string($Password);
		$Password2=mysql_escape_string($Password2);

		$sql = mysql_query("INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES (NULL , '$Fname', '$Lname', '$Email', '$Password')");
		if ($sql) {
			echo "<script> alert('$Fname You've successfully registerd to Switch Forum)
			 </script>";
			echo $Fname."Thank you for registering on switch forum You can now login";
		}else{
			echo mysql_error();
		} //end of sql

	} //end of checking password n confirm ppassword
}//end of clicking submit button


// }

//for login
if (isset($_POST['submit1'])) {
	$Email=mysql_real_escape_string($_POST['email']);
	$Password=mysql_real_escape_string($_POST['password']);

	

$sql= mysql_query("SELECT * FROM `users` WHERE email = '$Email' AND password = '$Password'");

if ($sql) {
	echo"selected";
}
else{
	echo mysql_error();
}
		if (mysql_num_rows($sql) > 0) {

			echo 'i am good';


			header("location:userpage.php");
		}

		else{
  			echo 'your Email and Password is invalid';
		}

}
	//form validation
//define variable set to empty
	$fnameErr = $lnameErr = $emailErr =""; 
	$fname = $lname = $email = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST['fname'])) {
		$fnameErr = "First name is required";
	}else{
		$fname = mysql_escape_string($_POST['fname']);
	}
	if (empty($_POST['lname'])) {
		$lnameErr = "Last name is required";
	}else{
		$lname = mysql_escape_string($_POST['lname']);
	}
	if (empty($_POST['$email'])) {
		$emailErr = "Email is required";
	}else{
		$email = mysql_escape_string($_POST['email']);
	}
	//check if email is well formed
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$emailErr = "invalid email format";
	}
	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title>Switch Group</title>
	<link rel="stylesheet" type="text/css" href="Bootstraps/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body class="body">
        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row ">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <img src="img/EDMAN (2).png">
                            <div class="description">
                            	<p>
	                            	A Meeting or Medium where ideas and view on a particular issue can be exchanged.
                            	</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row fm">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                          		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
	                            	
				                    <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Email</label>
				                        	<input type="email" name="email" placeholder="Email..." class="form-username form-control" id="">
				                        	<span class="error">*<?php echo $emailErr; ?></span>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="">
				                        </div>


				                        <button type="submit" VALUE="LOGIN" name="submit1" class="btn">Login</button>
				                    </form>
			                    </div>
		                    </div>
		                
		                	<div class="social-login sl">
	                        	<h3>or</h3>
	                        	<div class="social-login-buttons">
		                        	<a class="btn btn-link-1 btn-link-1-facebook" href="#">
		                        		<i class="fa fa-facebook"></i> Facebook
		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
		                        		<i class="fa fa-twitter"></i> Twitter
		                        	</a>
		                        	<!-- <a class="btn btn-link-1 btn-link-1-google-plus" href="#">
		                        		<i class="fa fa-google-plus"></i> Google Plus
		                        	</a> -->
	                        	</div>
	                        </div>
	                        
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <!-- <div class="col-sm-1"></div> -->
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
	                            <p><span class="error">*required field.</span></p>
				                    <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First name</label>
				                        	<input type="text" name="fname" placeholder="First name..." class="form-first-name form-control" id="">
				                        	<span class="error">*<?php echo $fnameErr; ?></span>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Last name</label>
				                        	<input type="text" name="lname" placeholder="Last name..." class="form-last-name form-control" id="">
				                        	<span class="error">*<?php echo $lnameErr; ?></span>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="text" name="email" placeholder="Email..." class="form-email form-control" id="">
				                        	<span class="error">*<?php echo $emailErr; ?></span>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Confirm Password</label>
				                        	<input type="password" name="pass_check" placeholder="Confirm Password..." class="form-password form-control" id="">
				                        </div>
				                        <button type="submit" name="submit" class="btn">Sign me up!</button>
				                    </form>
			                    </div>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
<script src="Bootstraps/js/jquery-3.1.1.min.js"></script>

<script src="Bootstraps/js/bootstrap.min.js"></script>

</body>
</html>