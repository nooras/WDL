<!DOCTYPE html>
<html>
    <head>
        <title>Nooras Fatima</title>
            <link rel="stylesheet" type="text/css" href="css/style.css" />
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html" title="About Me">Home</a></li>

                <li><a href="resume.html" title="Know More About Me">Resume</a></li>
                
                <li><a href="blog.html" title="My Blog">Blog</a></li>

                <li><a href="gallery.html" title="My Photos">Gallery</a></li>

                <li><a href="contact.html" title="Reach Me">Contact</a></li>
            </ul>
        </nav>
    </header>
<body>
<?php 
    require_once 'php/functions.php';
        if($_POST) {
            //insertUser();
            $name = fix_name($_POST('name'));
            $mobile = $_POST('mobile');
            $email = fix_email($_POST('email'));
            $rollno = fix_rollno($_POST('rollno'));
            $user = $_POST('user');
            $pass =$_POST('pass');
            if(!empty($rollno)&&!empty($name)&&!empty($email)&&!empty($mobile)&&!empty($user)&&!empty($pass)){
                $link=mysqli_connect('localhost','root','root','AIKTC');
                if(!$link){
                    echo '<br>Unable to connect to Database.'
                    .mysqli_connect_error();
                }
                $query="Insert into creat_usr values('$name','$mobile','$email','$rollno','$user','$pass')";
                 $result=mysqli_query($link,$query);
                if(!$result){
                    echo "<br>".mysqli_error($link);
                }
                else{
                    echo '<br><h4>Your data is successfully Inserted.</h4>';
                }

            }
        }
    
?>
<div class="container">
    
    <form role="form" method="post" action="createuser.php">
        <h1> Create Account</h1>
            <fieldset class="form-group">
                <label for="name">Your Full Name</label>
                <input class="form-control" type="text" maxlenght="50" id="name" name="name" required>
            </fieldset>
            <fieldset class="form-group">
                <label for="mobile">Mobile Number</label>
                <input class="form-control" type="number" maxlenght="10" id="mobile" name="mobile" required>
            </fieldset>
            <fieldset class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" id="email" name="email" maxlenght="50" required>
            </fieldset>
            <fieldset class="form-group">
                <label for="rollno">Roll No(if applicable)</label>
                <input class="form-control" type="text" id="rollno" name="rollno" maxlenght="8">
            </fieldset>
            <fieldset class="form-group">
                <label for="user">Enter Username</label>
                <input class="form-control" type="text" placeholder="Min 5 characters" maxlength="25" id="user" name="user" required><br>
                <span id="usererr"></span>
            </fieldset>
            <fieldset class="form-group">
                <label for="pass">Enter Password</label>
                <input class="form-control" type="password" placeholder="Min 8 char, 1 Lowercase,1 Uppercase, 1 Special Charcter" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" id="pass" name="pass" required>   
            </fieldset>
            <fieldset class="form-group">
                <label for="cpass">Confirm Password</label>
                <input class="form-control" type="password" id="cpass" placeholder="Repeat Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" name="cpass" required><br><span id="cpasserr"></span>
            </fieldset>
              
            <input type="hidden" name="usertype" id="usertype" value="1" required>
              
            <input type="submit" class="btn btn-primary" value="Create Account">
    </form><br><br>
</div>
    <footer>
        <div>
            &copy;2018 All rights reserved - Nooras Fatima
        </div>
    </footer>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="js/misc.js" type="text/javascript"></script>
</body>
</html>