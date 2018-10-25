<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" >
  <style>
			.body_main{
		    background: #000f40;
		    color:#fff;
		   margin:0;
			 font-family: cursive;
		  }
		  .star{
		    background-image: url("../img/star.png");
		    background-position: center 16px;
		    background-repeat: no-repeat;
		    background-size: 1180px 500px;
		    bottom: 0;
		    left: 0;
		    position: fixed;
		    right: 0;
		    top: 10px;
		    z-index: 0;
		  }
		  .layout{
		    padding: 0 10px;
		    width: 1000px;
		    margin: 0 auto;
		    position: relative;
		    justify-content: space-between;
		    align-items: center;
		    -webkit-box-pack:justify;
		  }
		  .word{
		    color:#fff;
		    font-size: 1.2em;
		    position: absolute;
		    left:90px;
		    top:10px;
				font-family: URW Chancery L, cursive ;
		    background-size: 80px 64px;
		    height: 70px;
		    width: 220px;
		  }
		  .logo{
		    background-image: url("../img/brain.png");
		    background-position: left;
		    background-repeat: no-repeat;
		    display: block;
		    background-size: 80px 64px;
		    height: 70px;
		    width: 90px;
		    position: relative;
		  }
		  .layout h1{
		    display: inline-block;
		  }
		  .nav{
		    float: right;
		    list-style: none;
		    margin-top: 45px;
		    right: 10px;
		  }
		  .nav li{
		    display: inline-block;
		  }
		  .nav li a{
		    color:white;
		    text-decoration: none;
		    padding: 5px 25px;
		    font-size: 18px;
		  }
		  .nav li a:hover{
				background-color:linear-gradient(rgba(0,0,0,.2) 40px,rgba(0,0,0,.15));
				color: #155079;
		  }
			.signup{
				padding: 6px 120px;
			}
			.login{
					padding: 6px 120px;
			}
			.btn{
				padding: 8px 43px;
				border-radius: 19px;
			}
			.btn-info1{
				background-color: #6679ba;
				margin: 20px 0;
				border: 0;
				transition: all 0.7s;
				border: 1px solid #155079;
			}
			.btn-info1:hover{
				background-color: #fff;
				color: #155079;
			}
			.h{
				margin: 15px 0;

			}
			.block1{
				background: linear-gradient(rgba(0,0,0,.2) 40px,rgba(0,0,0,.15));
				min-height: 500;
				min-width: 800;
				left:320px;
			}
			.foot{
		    width: 1000px;
		    text-align: center;
		    position: absolute;
		    left: 130px;
		    font-size: 20px;
		    font-weight: 600;
		    letter-spacing: 5px;
				top:600px;
				padding-bottom: 30px;
		  }
		</style>
</head>
<body class="body_main">
		<div class="star"></div>
	  <div>
	    <header id="main_head">
	      <div class="layout">
	        <h1><a class="logo"><span class="word">QuizStars</span></a></h1>
	          <ul class="nav">
	            <li><a href="../index.htm">Home</a></li>
	            <li><a href="register.php">Create Account</a></li>
	            <li><a href="login.php">Log in</a></li>
	            <li><a href="feedback.php">Feedback</a></li>
	          </ul>
	      </div>
	    </header>
	  </div>
		<?php
			session_start();
			$db=mysqli_connect("localhost","root","root","Quiz") or die(mysqli_error());
			if(isset($_POST['signup_btn']))
			{
				SignUp();
			}
			function SignUp()
			{
				$username = ($_POST['username']);
				$email = ($_POST['email']);
				$db=mysqli_connect("localhost","root","root","Quiz");
				if(!empty($_POST['username'])){
					$check= mysqli_query($db,("SELECT * FROM Users WHERE u_email='$email' "));
					if (mysqli_num_rows($check)>0){
								echo '<span style="font-size:1.30em; color:#fff; font-weight:bold;text-align:center;display:block;padding:20px">Email already exists!!</span>';
					}
					else {
							NewUser();
					}
				}
				mysqli_close($db);
			}
			function NewUser(){
				$username = ($_POST['username']);
				$email = ($_POST['email']);
				$pass = ($_POST['pass']);
				$c_pass = ($_POST['c_pass']);
				if($pass == $c_pass){
						$db=mysqli_connect("localhost","root","root","Quiz");
						$sql="INSERT INTO Users (u_name,u_email,u_pass) VALUES ('$username','$email','$pass')";
						$query=mysqli_query($db,$sql);
						echo '<span style="font-size:1.30em; color:#fff; font-weight:bold;text-align:center;display:block;padding:20px">Successfully sign up,now uou can Login.</span>';
						//header('location:register.php');
				}
				else{
				 echo '<span style="font-size:1.30em; color:#fff; font-weight:bold; text-align:center;display:block;padding:20px">Passwords Not Match!!</span>';
				}
			}
		?>
		<div class="ques fly-up"></div>
		<div class="col-md-6 text-center">
			<div class="g">
				<div class="row">
						<div class="col-md-12  block1">
						<h3 class="head"> Create Your Account Now</h3>
						<p class="para">Get Unlimited Response<br>Free Forever</p>
						<form  class="signup" method="post" action="register.php">
								<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user" area-hidden="true"></i></span>
								<input type="text" class="form-control" name="username" placeholder="username" required>
								</div>
								<div class="input-group h">
								<span class="input-group-addon"><i class="fa fa-envelope" area-hidden="true"></i></span>
									<input type="email" class="form-control" name="email" placeholder="E-mail" required>
								</div>
								<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-key" area-hidden="true"></i></span>
									<input type="Password" class="form-control" name="pass" placeholder="Password" required>
								</div>
								<div class="input-group h">
								<span class="input-group-addon"><i class="fa fa-key" area-hidden="true"></i></span>
									<input type="Password" class="form-control" name="c_pass" placeholder="Confirm Password" required>
								</div>

								<button type="submit" name="signup_btn" class="btn btn-info1">Sign up</button>
								<p>Already have an account? <a href="login.php">Login</a></p>
						</form>
						</div>
				</div>
			</div>
		</div>
		<div class="foot">
	  	<footer>
				&copy;2018 All rights reserved - N.H.
			</footer>
  	</div>
</body>
</html>
