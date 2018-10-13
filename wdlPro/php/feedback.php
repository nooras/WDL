<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Feedback Form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- Latest compiled and minified CSS -->
        <!-- Optional theme -->

        <style>
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
        .foot{
			    width: 1000px;
			    text-align: center;
			    position: absolute;
			    left: 130px;
			    font-size: 20px;
			    font-weight: 600;
			    letter-spacing: 5px;
					top:700px;
					padding-bottom: 30px;
			  }
        .block1{
					background: linear-gradient(rgba(0,0,0,.2) 40px,rgba(0,0,0,.15));
					min-height: 500;
					min-width: 800;
					left:320px;
          padding: 20px;
				}
.btn{
  background-color: #6679ba;

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
        if(isset($_POST['f_btn'])){
       $username = ($_POST['username']);
        $email = ($_POST['email']);
        $msg = ($_POST['comments']);
        $rating = ($_POST['experience']);
        if (!empty($username)&& !empty($email) && !empty($rating)) {
           $db=mysqli_connect("localhost","root","root","Quiz");
           $check= mysqli_query($db,"select u_id from Users where u_name='$username' and u_email='$email'");
 				   $r=mysqli_fetch_array($check);
           $t=$r['u_id'];
           if(!empty(mysqli_num_rows($check))){
           $sql="INSERT INTO feedback (u_id,msg,rating) VALUES ('$t','$msg','$rating')";
           $query=mysqli_query($db,$sql);
           echo '<span style="font-size:1.30em; color:#fff; font-weight:bold;text-align:center;display:block;padding:20px">Thank you!!!!!</span>';
         }
         else{
           echo '<span style="font-size:1.30em; color:#fff; font-weight:bold;text-align:center;display:block;padding:20px">You are not registered user!!!!!</span>';
         }
        }



      }



?>
<div class="col-md-6 text-center">
<div class="g">
<div class="row">
                <div class="col-md-12 block1">
                    <h2 >Feedback</h2>
                    <p style="color: white"> Please provide your feedback below: </p>
                    <form role="form" method="post" id="reused_form" action="feedback.php">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label style="color: white">How do you rate your overall experience?</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                        Bad
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        Average
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="good" >
                                        Good
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="comments"> Comments:</label>
                                <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments..." maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label > Your Name:</label>
                                <input type="text" class="form-control" id="name" name="username" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="text" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg  btn-block" name="f_btn" >Post </button>
                            </div>
                        </div>
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
