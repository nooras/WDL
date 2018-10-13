<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Blog</title>
	         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" >
         <style type="text/css">

				 .body_main{
 			    background: #000f40;
 			    color:#fff;
 			    /*position:relative;*/
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

/*.login{
		padding: 6px 120px;

}*/
.row{
	width: 500px;
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
  /*.ques{
    height: 400px;
    width: 300px;
    background-image: url("img/qm.png");
    color: #fff;
    background-position: 50%;
    background-size: auto 350px;
    background-repeat: no-repeat;
    padding: 45px;
  }*/

.btn-info1:hover{
	background-color: #fff;
	color: #155079;
}
.g{
	padding: 70px 0;
}
.h{
	margin: 15px 0;
	width:300px;
}
.block{
	background: linear-gradient(rgba(0,0,0,.2) 40px,rgba(0,0,0,.15));
	min-width: 500;
	min-height: 400;
	left: 300px;
}
.foot{
	width: 1000px;
	text-align: center;
	position: absolute;
	left: 130px;
		font-size: 20px;
		font-weight: 600;
		letter-spacing: 5px;
		margin-top: 50px;
}

		 </style>

</head>
<body class="body_main">
		<?php
  	session_start();
    //$db=mysqli_connect("localhost","root","root","Quiz") or die(mysqli_error());
    if(isset($_POST['login_btn'])){
		    	$u=$_SESSION['username'] = $_POST['username'];
					$p=$_SESSION['password'] = $_POST['pass'];
					$db=mysqli_connect("localhost","root","root","Quiz");
					$check= mysqli_query($db,"select * from Users where u_pass='$p' and u_name='$u'");
					$r=mysqli_fetch_array($check);
					$_SESSION['id']=$r['u_id'];
					if(!empty(mysqli_num_rows($check)))
					{
						echo '<span style="font-size:1.30em; color:#155079; font-weight:bold;">you are logged in</span>';
							header('location:type.php');
					}
					else
					{
						echo '<span style="font-size:1.30em; color:red; font-weight:bold;">SORRY!!! you are not registered member</span>';
						header('location:register.php');
					}
		     	 mysqli_close($db);
		}
?>
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
<div class="container">
		<div class="col-md-6 text-center">
			<div class="g">
				<div class="row">
					<div class="col-md-12 block">
       <h3 class="head" >Login Here</h3>
				<form  class="signup" action="login.php" method="post">
						<div class="input-group h">
						<span class="input-group-addon"><i class="fa fa-user" area-hidden="true"></i></span>
							<input type="text" class="form-control" name="username" placeholder="username" required>
						</div>
						<div class="input-group h">
						<span class="input-group-addon"><i class="fa fa-key" area-hidden="true"></i></span>
							<input type="password" class="form-control" name="pass" placeholder="password" required>
						</div>
					<button  type="submit" class="btn btn-info1" name="login_btn"><b>Log In</b></button>

				</form>
			</div>

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
