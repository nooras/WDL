<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>CSS Template</title>
  <meta charset="utf-8">
	<meta name="viewport">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css">
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
  .se{
    padding: 40px 0;
    background: linear-gradient(rgba(0,0,0,.2) 40px,rgba(0,0,0,.15));
    position: relative;
    margin:0 auto;
    width:100%;
    height: 500px;
    align-items: center;
  }
  .Type{
    padding: 0 10px;
    width: 1000px;
    margin: 0 auto;
    height: 400px;
    position: relative;
    align-items: center;
  }
  .layout3{
    margin: 0;
    padding: 0;
    width: 100%;
    height: 400px;
    position: relative;
  }
  .top{
    text-align: center;
    position: relative;
    line-height: 40px;
    margin:0 0 30px;
  }
  .top span{
    text-transform: uppercase;
    display: block;
  }
  .top1{
    font-size: 25px;
    font-weight: 300px;
  }
  .top2{
    font-size: 30px;
    font-weight: 350px;
  }
  .cont1{
    margin-left: 60px;
    width: 250px;
    height: 250px;
    display: flex;
    background-color: #fff;
    border-radius: 4px;
    flex-direction: column;
    /*margin: 0 0 35px 40px;*/
    position: absolute;
  }
  .atype{
    display: flex;
    align-items: center;
    border-radius: 3px 3px 0 0;
    height: 120px;
    width: 250px;
    background-color: #E3F372;
    justify-content: center;
  }
  .phy_logo{
    background-image: url("../img/phy2.png");
    background-position:right;
    background-repeat: no-repeat;
    display: block;
    background-size: 85px 80px;
    height: 90px;
    width: 90px;
    /*position: relative;*/
  }
  .type_name{
    display: flex;
    color: #000;
    flex-direction: column;
    text-align: center;
  }
  .button{
    background-color: #0060df;
    border: 0;
    color: #fff;
    width:150px;
    padding: 10px;
    cursor: pointer;
    left: 40px;
    border-radius: 4px;
    position: relative;
    text-align: center;
    text-decoration: none;
  }
  .cont2{
    margin-left: 370px;
    width: 250px;
    height: 250px;
    display: flex;
    background-color: #fff;
    border-radius: 4px;
    flex-direction: column;
    /*margin: 0 0 35px 40px;*/
    position: absolute;
  }
  .chem_logo{
    background-image: url("../img/chem.png");
    background-position:right;
    background-repeat: no-repeat;
    display: block;
    background-size: 85px 80px;
    height: 90px;
    width: 90px;
    /*position: relative;*/
  }
  .cont3{
    margin-left: 700px;
    width: 250px;
    height: 250px;
    display: flex;
    background-color: #fff;
    border-radius: 4px;
    flex-direction: column;
    /*margin: 0 0 35px 40px;*/
    position: absolute;
  }
  .math_logo{
    background-image: url("../img/maths.png");
    background-position:right;
    background-repeat: no-repeat;
    display: block;
    background-size: 85px 80px;
    height: 90px;
    width: 90px;
  }
  .foot{
    width: 1000px;
    text-align: center;
    position: absolute;
    left: 130px;
      font-size: 20px;
      font-weight: 600;
      letter-spacing: 5px;
      margin-top: 40px;
      top:480px;
  }
  .na{
    display: block;
    position: absolute;
    float: right;
    right: 33px;
  }
  </style>
</head>
<body class="body_main">
  <div class="star"></div>

  <header id="main_head">
		<div class="layout">
			<h1><a class="logo"><span class="word">QuizStars</span></a></h1>
				<ul class="nav">
					<li><a href="../pronew.htm">Home</a></li>
					<li><a href="register.php">Create Account</a></li>
					<li><a href="../index.htm">Log out</a></li>
					<li><a href="feedback.php">Feedback</a></li>
          <a class="na">Log in as <?=$_SESSION['username']?></a>
				</ul>
		</div>
	</header>
  <div class="se">
    <div class="Type">
      <div class="top">
        <span class="top1">Take Quiz</span>
        <span class="top2">&</span>
        <span class="top1">Improve your learning</span>
      </div>
      <div class="layout3">
        <div class="cont1">
          <div class="atype">
            <div class="phy_logo"></div>
          </div>
          <div class="type_name">
            <header>
              <div>
                <h2>Physics</h2>
              </div>
            </header>
          </div>
          <a class="button" type="button" href="phy.php">
            Get Started
          </a>
        </div>
        <div class="cont2">
          <div class="atype">
            <div class="chem_logo"></div>
          </div>
          <div class="type_name">
            <header>
              <div>
                <h2>Chemistry</h2>
              </div>
            </header>
          </div>
          <a class="button" type="button" href="chem.php">
            Get Started
          </a>
        </div>
        <div class="cont3">
          <div class="atype">
            <div class="math_logo"></div>
          </div>
          <div class="type_name">
            <header>
              <div>
                <h2>Mathematics</h2>
              </div>
            </header>
          </div>
          <a class="button" type="button" href="maths.php">
            Get Started
          </a>
        </div>
      </div>
    </div>
    <div class="foot">
    <footer>
  		&copy;2018 All rights reserved - N.H.
  	</footer>
    </div>
  </div>
</body>
</html>
