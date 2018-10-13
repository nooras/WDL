<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <meta charset="utf-8">
	<meta name="viewport">
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
   padding-left: 40px;
   background: linear-gradient(rgba(0,0,0,.2) 40px,rgba(0,0,0,.15));
   position: relative;
   margin:0 auto;
   width:1000px;
   height: 300px;
   align-items: center;
 }
 .se2{
   padding: 40px 0;
   padding-left: 40px;
   background: linear-gradient(rgba(0,0,0,.2) 40px,rgba(0,0,0,.15));
   position: relative;
   margin:0 auto;
   width:1000px;
   height: 200px;
   align-items: center;
 }
 .foot{
   width: 1000px;
   text-align: center;
   position: absolute;
   left: 130px;
     font-size: 20px;
     font-weight: 600;
     letter-spacing: 5px;
     top: 550px;
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

<?php
 $data=[];
 $choice=[];
 $increment = 0;
 $userid = $_SESSION['id'];
if($_POST){
  $link=mysqli_connect('localhost','root','root','Quiz');
  $q_id = mysqli_query($link,"select Q_id from phy_ques");
  //echo "string";
  //var_dump($t);
  while($resqid = mysqli_fetch_array($q_id)){
    //echo $resqid;
    if(($temp_data = $_POST[$resqid['Q_id']])){
      array_push($data,$temp_data);
      //var_dump($data);
      $b = $resqid['Q_id'];
      $r_ch = mysqli_query($link,"select right_ch from phy_ques where Q_id = $b");
      $resch = mysqli_fetch_array($r_ch);
      array_push($choice,$resch['right_ch']);

      //echo $abc['right_ch'];
      //echo $resqid['Q_id'];
      //echo $a[$i];
    }
  }
  if(!empty($data[0])&&!empty($data[1])&&!empty($data[2])&&!empty($data[3])&&!empty($data[4])&&!empty($data[5])
  &&!empty($data[6])&&!empty($data[7])&&!empty($data[8])&&!empty($data[9])){
  for($i=0;$i<10;$i++){
    if($data[$i] == $choice[$i]){
      $increment++;
    }
  }

  $remark =0;
  if($increment > 7){
    $remark = 'Good';
  }elseif ($increment > 4) {
    $remark = 'Average';
  }else{
    $remark = 'Bad';
  }
  $values = "INSERT INTO result (u_id,marks,remarks,ans1,ans2,ans3,ans4,ans5,ans6,ans7,ans8,ans9,ans10) VALUES ('$userid','$increment','$remark','$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]')";
  $run = mysqli_query($link,$values);

?>


<div class="se">
<h1>Congratulation</h1>
<h2>You got : <?= $increment?> / 10</h2>
<h2>Remark : <?=$remark?></h2>
</div>
<?php
}
else{?>
  <div class="se2">
    <h1>You have not completed test!!</h1>
  </div>
<?php
}
}?>
<div class="foot">
<footer>
  &copy;2018 All rights reserved - N.H.
</footer>
</div>
</body>
</html>
