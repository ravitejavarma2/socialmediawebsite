<?php
if (isset($_POST['change']))
{
session_start();
$server="localhost";
  $username="root";
  $password="";
  $db="test1";
  $port="3307";
  $con=mysqli_connect($server,$username,$password,$db,$port);
$user=$_SESSION['un'];
$password=$_POST['cp'];

  if(!$con)
  {
    die("connection failed".mysqli_connect);
  }
  
 $sql="update `test1`.`info` SET password='$password' WHERE username='"."$user"."'";
 if($con->query($sql)==true)
{
  echo "<script>alert('Password Changed !!')</script>";
  
}
else
{
  echo  $con->error;
}
$con->close();
}



  ?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
  html {
  height:100%;
}

body {
  margin:0;
}

.bg {
  animation:slide 3s ease-in-out infinite alternate;
  background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
  bottom:0;
  left:-50%;
  opacity:.5;
  position:fixed;
  right:-50%;
  top:0;
  z-index:-1;
}

.bg2 {
  animation-direction:alternate-reverse;
  animation-duration:4s;
}

.bg3 {
  animation-duration:5s;
}

.content {
  
  border-collapse: collapse;
   font-family: "Trebuchet MS", Helvetica, sans-serif;
  
  left:50%;
  padding:10vmin;
  position:fixed;
  text-align:center;
  top:50%;

  transform:translate(-50%, -50%);
}

h1 {
  font-family:monospace;
}

@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
}
    a {
  text-decoration: none;
}
body {
  background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
  background-repeat: no-repeat;
}
label {
  font-family: "Raleway", sans-serif;
  font-size: 11pt;
}
#forgot-pass {
  color: #2dbd6e;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 3px;
  text-align: right;
}
#card {
  width: 25%;
    padding: 30px;
      background: #111845a6;
      box-sizing: border-box;
      border-radius: 5%;
      box-shadow: 0 20px 50px rgb(23, 32, 90);
      border: 2px solid #2a3cad;
      color: white;
      margin: auto;
      margin-top: 50px;
}
#card-content {
  padding: 12px 44px;
}
#card-title {
  font-family: "Raleway Thin", sans-serif;
  letter-spacing: 4px;
  padding-bottom: 23px;
  padding-top: 13px;
  text-align: center;
}
#signup {
  color: #2dbd6e;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 16px;
  text-align: center;
}
#submit-btn {
  background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
  border: none;
  border-radius: 21px;
  box-shadow: 0px 1px 8px #24c64f;
  cursor: pointer;
  color: white;
  font-family: "Raleway SemiBold", sans-serif;
  height: 42.3px;
  margin: 0 auto;
  margin-top: 50px;
  transition: 0.25s;
  width: 153px;
}
#submit-btn:hover {
  box-shadow: 0px 1px 18px #24c64f;
}
.form {
  align-items: left;
  display: flex;
  flex-direction: column;
}
.form-border {
  background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
  width: 100%;
}
.form-content {
  background: #fbfbfb;
  border: none;
  outline: none;
  padding-top: 14px;
}
.underline-title {
  background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
  height: 2px;
  margin: -1.1rem auto 0 auto;
  width: 89px;
}
body {

  height: 100%;
  margin:0;
  color: #2dbd6e;
  
}
img
  {
    position: fixed;
    left: 2px;
    border:solid;
    top: 1px;
box-shadow: 0 20px 50px rgb(23, 32, 90);
border-radius:15%;
  }
</style>
</head>

<body>
<br><br><br>
<img class="logo" src="logo.jpeg" width="150" height="50">
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

  <div id="card" >
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
      </div>
      <form method="post" class="form" action="feed.php">
        <label for="user-email" style="padding-top:13px">
            &nbsp;USERNAME
          </label>
        <input id="un" class="form-content" type="text" name="un"  required />
        <div class="form-border"></div>
        <label  style="padding-top:22px">Password
          </label>
        <input id="user-password" class="form-content" type="password" name="cp" required />
        <div class="form-border"></div>
        <a href="verification.html">
          <legend id="forgot-pass">Forgot password?</legend>
        </a>
        <input id="submit-btn" type="submit" name="submit" value="LOGIN" style="background-color:#10c254"/>
        <a href="main.html" id="signup">Don't have account yet?</a>
      </form>
    </div>
  </div>
</body>

</html>