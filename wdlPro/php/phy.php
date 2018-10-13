<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
	<meta name="viewport">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <script class="load" language="Javascript" type="text/javascript">
  $(document).ready(function () {

    $("#no").submit(function(e) {
    e.preventDefault();
  });

});
  </script>
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
  .na{
    display: block;
    position: absolute;
    float: right;
    right: 33px;
  }
 .se{
   padding: 40px 0;
   padding-left: 40px;
   background: linear-gradient(rgba(0,0,0,.2) 40px,rgba(0,0,0,.15));
   position: relative;
   margin:0 auto;
   width:1000px;
   height: 1400px;
   align-items: center;
 }
 .sub{
   margin-top: 20px;
   color: black;
 }
 .foot{
   width: 1000px;
   text-align: center;
   position: absolute;
   left: 130px;
     font-size: 20px;
     font-weight: 600;
     letter-spacing: 5px;
     top: 1650px;
     padding-bottom: 40px;
 }
  </style>
</head>
<?php
session_start();
 ?>
<body class="body_main">
  <div class="star"></div>
  <div>
  	<header id="main_head">
  		<div class="layout">
  			<h1><a class="logo"><span class="word">QuizStars</span></a></h1>
  				<ul class="nav">
  					<li><a href="../index.htm">Home</a></li>
  					<li><a href="register.php">Create Account</a></li>
  					<li><a href="../index.htm">Log out</a></li>
  					<li><a href="feedback.php">Feedback</a></li>
            <a class="na">Log in as <?=$_SESSION['username']?></a>
  				</ul>
  		</div>

  	</header>
  </div>
  <div class="se">


  <?php
  $link=mysqli_connect('localhost','root','root','Quiz');
  if(!$link){
      echo '<br>Unable to connect to Database.'
      .mysqli_connect_error();
  }
  $result=  mysqli_query($link,"select * from phy_ques order by rand() LIMIT 10");

  if(!$result){
      echo "<br>".mysqli_error($link);
  }

  else{

    ?>

    <form id="no" method="post" action="phy_part.php">

    <?php $a=0;?>
    <?php
    $temp = [];
    while($row=mysqli_fetch_array($result)) {?>

    <?php
    array_push($temp,$row['Q_id']);
    $ans_array = array($row['ch1'], $row['ch2'], $row['ch3'], $row['ch4']);
	shuffle($ans_array);
  ?>

    <p><?=++$a?>.<?=$row['Question']?></p>

    <input type="radio" name="<?=$row['Q_id']?>" value="<?=$ans_array[0]?>"> <?= $ans_array[0];?><br>
    <input type="radio" name="<?=$row['Q_id']?>" value="<?=$ans_array[1]?>"> <?= $ans_array[1]?><br>
    <input type="radio" name="<?=$row['Q_id']?>" value="<?=$ans_array[2]?>"> <?= $ans_array[2]?><br>
    <input type="radio" name="<?=$row['Q_id']?>" value="<?=$ans_array[3]?>"> <?= $ans_array[3]?><br>

    <?php } ?>
    <input class="sub" type="submit" value="Submit!">
    </form>

    <?php

  }


    ?>
</div>
<div class="foot">
<footer>
  &copy;2018 All rights reserved - N.H.
</footer>
</div>
</body>
</html>
